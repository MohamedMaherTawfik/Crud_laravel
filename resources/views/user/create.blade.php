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
    <form action="{{route('store')}}" method="POST">
        @csrf

        <div class="">
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="Name">
            @error('name')
                <p class="text-sm text-red-500 italic font-semibold mt-3">{{$message}}</p>
            @enderror
        </div>
<br>
        <div class="">
            <label for="name">Email:</label>
            <input type="text" name="email" placeholder="Email">
            @error('email')
                <p class="text-sm text-red-500 italic font-semibold mt-3">{{$message}}</p>
            @enderror
        </div>
<br>
        <div class="">
            <label for="name">Phone:</label>
            <input type="text" name="phoneNumber" placeholder="Name">
            @error('phoneNumber')
                <p class="text-sm text-red-500 italic font-semibold mt-3">{{$message}}</p>
            @enderror
        </div>
<br>
        <button type="submit">Submit</button>
        </form>

</body>
</html>
