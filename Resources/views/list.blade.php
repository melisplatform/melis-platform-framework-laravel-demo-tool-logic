<h2>{{ __('laravelDemoTool::messages.album') }}</h2>
<p>{!! __('laravelDemoTool::messages.album_message') !!}</p>
<pre>
    $albums = DB::table('melis_demo_album')->get();
</pre>
<table class="table">
    <tr style=" background: #ff2d20; color: #fff;">
        <th>{{ __('laravelDemoTool::messages.id') }}</th>
        <th>{{ __('laravelDemoTool::messages.album_name') }}</th>
        <th>{{ __('laravelDemoTool::messages.songs') }}</th>
        <th>{{ __('laravelDemoTool::messages.date') }}</th>
    </tr>
    @foreach($albums As $album)
        <tr>
            <td>{{ $album->alb_id }}</td>
            <td>{{ $album->alb_name }}</td>
            <td>{{ $album->alb_song_num }}</td>
            <td>{{ $album->alb_date }}</td>
        </tr>
    @endforeach
</table>

<h2>{{ __('laravelDemoTool::messages.core_lang') }}</h2>
<p>{{ __('laravelDemoTool::messages.core_lang_message') }}</p>
<pre>
    $languages = app('ZendServiceManager')->get('MelisCoreTableLang')->fetchAll();
</pre>
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
