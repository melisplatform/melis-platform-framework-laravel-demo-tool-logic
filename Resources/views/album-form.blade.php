<div class="modal-body padding-none">
    <div class="wizard">
        <div class="widget widget-tabs widget-tabs-double widget-tabs-responsive margin-none border-none">
            <div class="widget-head">
                <ul class="nav nav-tabs">
                    <li class="'.$active.'"><a href="#id-melis-laravel-demo-tool-modal" class="glyphicons pencil" data-toggle="tab" aria-expanded="true"><i></i> Album</a></li>';
                </ul>
            </div>
            <div class="widget-body innerAll inner-2x">
                <div class="tab-content">
                    <div class="tab-pane active" id="id-melis-laravel-demo-tool-modal">
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::open(['action' => ['IndexController@albumForm', $albumId], 'method' => 'post']) !!}

                                {{ Form::bsText('id', 'ID') }}
                                {{ Form::bsText('album', 'Album') }}
                                {{ Form::bsText('songs', 'Songs') }}
                                {{ Form::bsText('date', 'Date') }}

                                {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                    <div align="right">
                        <a data-dismiss="modal" class="btn btn-danger pull-left"><i class="fa fa-times"></i> Close</a>
                        <a class="btn btn-success btnSaveModuleTpl" data-id="1"><i class="fa fa-save"></i>  Save</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
