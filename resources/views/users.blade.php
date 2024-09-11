<html>
    <head>
        <title>List of users</title>
    </head>
    <body>
        <h2>Список пользователей</h2>
        <table style="border: 2px solid black;">
            @foreach($users as $user)
            <tr><td>{{$user->id}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
