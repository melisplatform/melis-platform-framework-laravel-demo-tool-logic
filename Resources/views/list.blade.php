<div class="me-heading bg-white border-bottom">
    <div class="row">
        <div class="me-hl col-8 col-sm-8 col-md-8">
            <h1 class="content-heading">{{ __('laravelDemoTool::messages.title') }}</h1>
            <p>{{ __('laravelDemoTool::messages.desc') }}</p>
        </div>
        <div class="me-hl col-4 col-sm-4 col-md-4">
            <button class="btn btn-success float-right btn-add-update-action">{{ __('laravelDemoTool::messages.new_album') }}</button>
        </div>
    </div>
</div>
<div class="innerAll spacing-x2">
    <h2>{{ __('laravelDemoTool::messages.album') }}</h2>
    <p>{!! __('laravelDemoTool::messages.album_message') !!}</p>
    {!! DataTable::createTable($dataTableConfig) !!}

    <h2>{{ __('laravelDemoTool::messages.core_lang') }}</h2>
    <p>{{ __('laravelDemoTool::messages.core_lang_message') }}</p>
    <pre>$languages = app('ZendServiceManager')->get('MelisCoreTableLang')->fetchAll();</pre>
    <table class="table">
        <tr style=" background: #ff2d20; color: #fff;">
            <th>{{ __('laravelDemoTool::messages.id') }}</th>
            <th>{{ __('laravelDemoTool::messages.locale') }}</th>
            <th>{{ __('laravelDemoTool::messages.name') }}</th>
        </tr>
        @foreach($langs As $lang)
            <tr>
                <td>{{ $lang->lang_id }}</td>
                <td>{{ $lang->lang_locale }}</td>
                <td>{{ $lang->lang_name }}</td>
            </tr>
        @endforeach
    </table>
</div>