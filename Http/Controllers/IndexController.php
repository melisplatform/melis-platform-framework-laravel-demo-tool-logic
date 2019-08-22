<?php

namespace MelisPlatformFrameworkLaravelDemoToolLogic\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function list1()
    {
        $melisUsers = $users = DB::table('melis_core_user')->get();
        $melisLogs = $users = DB::table('melis_core_log')->get();

        return view('melisplatformframeworklaraveldemotoollogic::list1', ['users' => $melisUsers, 'logs' => $melisLogs]);
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function list2()
    {
        $sl = app('ZendServiceManager');

        $melisUsers = $sl->get('MelisCoreTableUser')->fetchAll()->toArray();
        $melisLogs = $sl->get('MelisCoreLogService')->getLogList();

        return view('melisplatformframeworklaraveldemotoollogic::list2', ['users' => $melisUsers, 'logs' => $melisLogs]);
    }
}
