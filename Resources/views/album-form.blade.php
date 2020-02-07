<div class="modal-body padding-none">
    <div class="wizard">
        <div class="widget widget-tabs widget-tabs-double widget-tabs-responsive margin-none border-none">
            <div class="widget-head">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#id-melis-laravel-demo-tool-modal" class="glyphicons {{ $albumId ? 'pencil' : 'plus' }}" data-toggle="tab" aria-expanded="true"><i></i>
                            {{ __('laravelDemoTool::messages.album')  }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="widget-body innerAll inner-2x">
                <div class="tab-content">
                    <div class="tab-pane active" id="id-melis-laravel-demo-tool-modal">
                        <div class="row">
                            <div class="col-md-12">
                                {{! $formAttr = ['action' => 'IndexController@saveAlbum' ,'method' => 'post', 'id' => 'laravel-album-form'] }}
                                @if($album)
                                    {{ Form::model($album, $formAttr) }}
                                @else
                                    {!! Form::open($formAttr) !!}
                                @endif
                                {{ Form::bsText('alb_id', __('laravelDemoTool::messages.alb_id_text'), null, ['disabled' => true]) }}
                                {{ Form::bsText('alb_name', __('laravelDemoTool::messages.alb_name_text').' *', __('laravelDemoTool::messages.alb_name_text tooltip')) }}
                                {{ Form::bsText('alb_song_num', __('laravelDemoTool::messages.alb_song_num_text').' *', __('laravelDemoTool::messages.alb_song_num_text tooltip')) }}

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                    <div class="footer-modal d-flex flex-row justify-content-between">
                        <a data-dismiss="modal" class="btn btn-danger float-left"><i class="fa fa-times"></i> Close</a>
                        <a class="btn btn-success btn-save-action" {{ $albumId ? 'data-id="' .$albumId. '"' : '' }}><i class="fa fa-save"></i>  Save</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
