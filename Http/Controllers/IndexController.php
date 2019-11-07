<?php

namespace MelisPlatformFrameworkLaravelDemoToolLogic\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use MelisPlatformFrameworkLaravelDemoToolLogic\Http\Requests\AlbumRequest;
use MelisPlatformFrameworkLaravelDemoToolLogic\Model\Album;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing
     * This is an example retrieving data from database
     * using Laravel database query builder and Zend service manager
     * @return Response
     */
    public function list()
    {
        $dataTableConfig = config('data-table-config.table');

        /**
         * And this retrieving datas using Zend service manager
         */
        $languages = app('ZendServiceManager')->get('MelisCoreTableLang')->fetchAll();

        return view('laravelDemoTool::list', ['langs' => $languages, 'dataTableConfig' => $dataTableConfig]);
    }

    /**
     * Tool Data table
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function tableData(Request $request)
    {
        $orderKey = $request->input('columns.'.$request->input('order.0.column').'.data');
        $sortOrder = $request->input('order.0.dir');
        $start = $request->input('start');
        $length =  $request->input('length');
        $search = $request->input('search.value');

        $album = Album::select('*', (new Album)->getKeyName().' As DT_RowId')
                        ->orderBy($orderKey, $sortOrder);

        // Fetching total records from db table
        $totalRecords = $album->get()->count();

        $dataTableConfig = config('data-table-config.table');
        if ($search && $dataTableConfig['searchables'])
            foreach ($dataTableConfig['searchables'] As $col)
                $album->orWhere($col, 'like', '%'.$search.'%');

        // Fetching filtered records from db table
        $recordsFiltered = $album->get()->count();

        // Fetching filtered records with offset and limit from db table
        $data = $album->offset($start)
                        ->limit($length)
                        ->get();

        return response()->json([
            'draw' => (int) $request->input('draw'),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' =>  $recordsFiltered,
            'data' => $data,
        ]);
    }

    /**
     * Display a listing
     * This is an example retrieving data from database
     * using Laravel database query builder and Zend service manager
     * @return Response
     */
    public function pluginlist()
    {
        /**
         * Fetching from Database using Laravel Eloquent ORM
         */
        $albums = Album::all();

        return view('laravelDemoTool::plugin.list', ['albums' => $albums]);
    }

    /**
     * Modal Form View
     *
     * @param null $albumId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function albumForm($albumId = null)
    {
        $album = null;

        if ($albumId)
            $album = Album::find($albumId);

        $param = [
            'albumId' => $albumId,
            'album' =>  $album
        ];

        return view('laravelDemoTool::album-form', $param);
    }

    /**
     * Store data submitted to Album
     *
     * @param AlbumRequest $request
     * @param null $albumId
     * @return \Illuminate\Http\JsonResponse
     */
    public function saveAlbum(AlbumRequest $request, $albumId = null)
    {
        // Validate
        $request->validated();

        // Album Model
        $album = new Album;
        if ($albumId){
            $album = Album::find($albumId);
        }

        // Fill with Data from input
        $album->fill($request->input());

        // Save
        $album->save();

        return response()->json(['success' => 1]);
    }

    /**
     * Delete album
     *
     * @param null $albumId
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteAlbum($albumId = null)
    {
        $album = Album::find($albumId);
        $album->delete();
        return response()->json(['success' => 1]);
    }
}
