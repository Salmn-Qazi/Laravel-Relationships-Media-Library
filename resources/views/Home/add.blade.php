<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <form action="{{route('user.add')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="" placeholder="name" />
        <br>
        <input type="file" name="image" id="" />
        <input type="submit" value="Add" />
    </form>
</body>
</html>