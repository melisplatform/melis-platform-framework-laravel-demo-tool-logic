<h2>Album</h2>
<table class="table">
    <tr style=" background: #ea4e49; color: #fff;">
        <th>ID</th>
        <th>Album Name</th>
        <th>Song Number</th>
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

<h2>Melis Core Languages</h2>
<table class="table">
    <tr style=" background: #ea4e49; color: #fff;">
        <th>ID</th>
        <th>Locale</th>
        <th>Name</th>
    </tr>
    @foreach($langs As $lang)
        <tr>
            <td>{{ $lang->lang_id }}</td>
            <td>{{ $lang->lang_locale }}</td>
            <td>{{ $lang->lang_name }}</td>
        </tr>
    @endforeach
</table>
