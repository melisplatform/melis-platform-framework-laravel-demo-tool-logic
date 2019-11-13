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
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['alb_name', 'alb_date', 'alb_song_num'];




//    public function getCreatedAtAttribute($date)
//    {
//        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
//    }
}