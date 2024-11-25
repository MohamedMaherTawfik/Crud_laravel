<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
</head>
<body>
    <form action="{{route('update', $user->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="">
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{$user->name}}">
            @error('name')
                <p class="text-sm text-red-500 italic font-semibold mt-3">{{$message}}</p>
            @enderror
        </div>
<br>
        <div class="">
            <label for="name">Email:</label>
            <input type="text" value="{{$user->email}}" name="email">
            @error('email')
                <p class="text-sm text-red-500 italic font-semibold mt-3">{{$message}}</p>
            @enderror
        </div>
<br>
        <div class="">
            <label for="name">Phone:</label>
            <input type="text" value="{{$user->phoneNumber}}" name="phoneNumber" >
            @error('phoneNumber')
                <p class="text-sm text-red-500 italic font-semibold mt-3">{{$message}}</p>
            @enderror
        </div>
<br>
        <button type="submit">Submit</button>
        </form>

</body>
</html>
