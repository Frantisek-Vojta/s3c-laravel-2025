<h1>Users</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>#{{$user->id}}</td>
            <td>{{$user->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
