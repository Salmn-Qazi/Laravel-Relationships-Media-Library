<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th><b>Name</b></th>
                <th><b>Image</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td><img src="{{$user->getFirstMediaUrl('Images')}}" alt="{{$user->name}}" height="200" width="200" /></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>