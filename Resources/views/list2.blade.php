<div class="innerAll spacing-x2">
    <h2>Album</h2>
    <p>The table below shows the data fetched from the database using Laravel.</p>
    <pre>$albums = DB::table('melis_demo_album')->get();</pre>
    <table class="table">
        <tr style=" background: #ff2d20; color: #fff;">
            <th>ID</th>
            <th>Album name</th>
            <th>Songs</th>
            <th>Date</th>
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
</div>