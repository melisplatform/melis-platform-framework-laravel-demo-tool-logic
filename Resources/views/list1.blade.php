<h2>Melis Core Users</h2>
<table class="table">
    <tr style=" background: #ea4e49; color: #fff;">
        <th>ID</th>
        <th>Login</th>
        <th>Status</th>
        <th>Photo</th>
        <th>Email</th>
        <th>Name</th>
        <th>Last login</th>
    </tr>
    @foreach($users As $user)
        <tr>
            <td>{{ $user->usr_id }}</td>
            <td>{{ $user->usr_login }}</td>
            <td>{{ $user->usr_status }}</td>
            <td>{{ $user->usr_image }}</td>
            <td>{{ $user->usr_email }}</td>
            <td>{{ $user->usr_firstname .' '. $user->usr_lastname }}</td>
            <td>{{ $user->usr_last_login_date }}</td>
        </tr>
    @endforeach
</table>

<h2>Melis Core Logs</h2>
<table class="table">
    <tr style=" background: #ea4e49; color: #fff;">
        <th>ID</th>
        <th>Title</th>
        <th>Message</th>
        <th>User ID</th>
        <th>Type</th>
        <th>Item ID</th>
        <th>Date</th>
    </tr>
    @foreach($logs As $log)
        <tr>
            <td>{{ $log->log_id }}</td>
            <td>{{ $log->log_title }}</td>
            <td>{{ $log->log_message }}</td>
            <td>{{ $log->log_user_id }}</td>
            <td>{{ $log->log_type_id }}</td>
            <td>{{ $log->log_item_id }}</td>
            <td>{{ $log->log_date_added }}</td>
        </tr>
    @endforeach
</table>
