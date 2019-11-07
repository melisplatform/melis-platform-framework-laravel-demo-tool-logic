<?php

return [
    'table' => [
        'attributes' => [
            'id' => 'laravel-demo-tool',
            'class' => 'table table-striped table-primary dt-responsive nowrap',
            'cellspacing' => '0',
            'width' => '100%',
        ],
        'ajaxUrl' => '/melis/laravel-get-table-data',
        'dataFunction' => '',
        'ajaxCallback' => '',
        'filters' => [
            'left' => [
                'show' => "l",
            ],
            'center' => [
                'search' => "f"
            ],
            'right' => [
                'refresh' => '<div class="laravel-table-refresh"><a class="btn btn-default melis-laravel-refresh" data-toggle="tab" aria-expanded="true" ><i class="fa fa-refresh"></i></a></div>'
            ],
        ],
        'columns' => [
            'alb_id' => [
                'text' => __('laravelDemoTool::messages.alb_id_text'),
                'css' => ['width' => '10%'],
                'sortable' => true,
            ],
            'alb_name' => [
                'text' => __('laravelDemoTool::messages.alb_name_text'),
                'css' => ['width' => '20%'],
                'sortable' => true,
            ],
            'alb_date' => [
                'text' => __('laravelDemoTool::messages.alb_song_num_text'),
                'css' => ['width' => '30%'],
                'sortable' => true,
            ],
            'alb_song_num' => [
                'text' => __('laravelDemoTool::messages.alb_date_text'),
                'css' => ['width' => '30%'],
                'sortable' => true,
            ],
        ],
        'searchables' => [
            'alb_id','alb_name','alb_song_num', 'alb_date'
        ],
        'actionButtons' => [
            'edit' => '<button class="btn btn-success btn-add-update-action"><i class="fa fa-pencil"></i></button>',
            'delete' => '<button class="btn btn-danger btn-delete-album"><i class="fa fa-times"></i></button>'
        ],
    ],
];