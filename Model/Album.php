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
    const CREATED_AT =  null;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['alb_name', 'alb_date', 'alb_song_num'];
}