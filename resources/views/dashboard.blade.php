<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    
    <div class="container text-center pt-4">
        Selamat Datang {{ auth()->user()->name }}
        <div class="div">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <input type="submit" class="btn btn-danger" value="Logout">
            </form>
        </div>
    </div>

</body>
</html>