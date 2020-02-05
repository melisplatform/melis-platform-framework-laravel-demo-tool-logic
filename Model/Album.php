<?php

namespace MelisPlatformFrameworkLaravelDemoToolLogic\Model;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'melis_demo_album';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'alb_id';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = null;

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT =  'alb_date';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['alb_name', 'alb_song_num'];

    /**
     * Action log types
     */
    const ADD = 'Add';
    const UPDATE = 'UPDATE';
    const DELETE= 'DELETE';

    /**
     * Saving action to logs using Melis Core Service
     *
     * @param $result
     * @param $title
     * @param $message
     * @param $logType
     * @param $itemId
     */
    public function logAction($result, $title, $message, $logType, $itemId)
    {
        $flashMessenger = app('ZendServiceManager')->get('MelisCoreFlashMessenger');

        $icon = ($result) ? $flashMessenger::INFO:  $flashMessenger::WARNING;

        $logType = 'MELIS_PLATFORM_FRAMEWORK_LARAVEL_'.$logType;

        $flashMessenger->addToFlashMessenger($title, $message, $icon);

        $logSrv = app('ZendServiceManager')->get('MelisCoreLogService');
        $logSrv->saveLog($title, $message, $result, $logType, $itemId);
    }
}