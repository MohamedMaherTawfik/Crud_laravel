<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button><a href="{{route('create')}}">New User</a></button>
    @foreach ($user as $item)
    <div>
        <p>Name: {{ $item->name }}</p>
        <p>Email: {{ $item->email }}</p>
        <p>Phone: {{ $item->phoneNumber }}</p>
        <div>
            <button><a href="{{route('edit', $item->id)}}">Edit</a></button>
            <button><a href="{{route('delete', $item->id)}}">Delete</a></button>
        </div>
    </div>
    <hr>
    @endforeach

</body>
</html>
