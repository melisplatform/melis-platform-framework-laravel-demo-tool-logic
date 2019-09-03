<?php

namespace MelisPlatformFrameworkLaravelDemoToolLogic\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

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
        /**
         * Fetching datas from Database using Laravel database query builder
         */
        $albums = DB::table('melis_demo_album')->get();

        /**
         * And this retrieving datas using Zend service manager
         */
        $languages = app('ZendServiceManager')->get('MelisCoreTableLang')->fetchAll();

        return view('laravelDemoTool::list', ['albums' => $albums, 'langs' => $languages]);
    }
}
