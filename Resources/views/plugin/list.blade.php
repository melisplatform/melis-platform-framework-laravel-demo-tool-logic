<div class="innerAll spacing-x2">
    <h2>{{ __('laravelDemoTool::messages.album') }}</h2>
    <p>{!! __('laravelDemoTool::messages.album_message') !!}</p>
    <pre>$albums = Album::all();</pre>
    <table class="table table-primary table-bordered table-striped">
        <thead>
            <tr>
                <th>{{ __('laravelDemoTool::messages.alb_id_text') }}</th>
                <th>{{ __('laravelDemoTool::messages.alb_name_text') }}</th>
                <th>{{ __('laravelDemoTool::messages.alb_song_num_text') }}</th>
                <th>{{ __('laravelDemoTool::messages.alb_date_text') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($albums As $album)
                <tr>
                    <td>{{ $album->alb_id }}</td>
                    <td>{{ $album->alb_name }}</td>
                    <td>{{ $album->alb_song_num }}</td>
                    <td>{{ $album->alb_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>