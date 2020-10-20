<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>

    <header>
        <ul class="nav nav-tabs">
            <li class="nav-item">
            <a class="nav-link" href="{{route('users.index')}}">Users</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{route('posts.index')}}" role="button" aria-haspopup="true" aria-expanded="false">Posts</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('posts.create')}}">Crea Post</a>
            </li>

    </header>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

</body>

</html>
