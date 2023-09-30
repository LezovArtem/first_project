<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<nav class="nav">
    <a class="nav-link" href="{{route('homepage')}}">Main</a>
    <a class="nav-link" href="{{route('posts.index')}}">Posts</a>
    <a class="nav-link" href="{{route('posts.create')}}">Create</a>
    <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>

@can('view', auth()->user())
        <a class="nav-link" href="{{route('admin.post.index')}}">Admin</a>
    @endcan
</nav>
<br>
@yield('mysite')


</body>
</html>
