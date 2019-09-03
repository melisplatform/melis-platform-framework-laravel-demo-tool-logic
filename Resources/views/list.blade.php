<h2>Album</h2>
<p>This list of data created from simple Laravel Query Builder in <span class="text-danger">Http/Controllers/IndexController.php</span> using with the same Database connection of Melis Platform.</p>
<pre>
    $albums = DB::table('melis_demo_album')->get();
</pre>
<table class="table">
    <tr style=" background: #ff2d20; color: #fff;">
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
<p>And this list of data is created using <b>Zend Service Manager</b> that provides a services, this service provide a table gateway or a databse connection to fetch rows of data</p>
<pre>
    $languages = app('ZendServiceManager')->get('MelisCoreTableLang')->fetchAll();
</pre>
<table class="table">
    <tr style=" background: #ff2d20; color: #fff;">
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
