<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('font/bootstrap-icons.min.css')}}">
    <title>@yield('tittle')</title>
</head>
<body>
<header>
    <div class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style="background: midnightblue; padding: 10px">
            <div class="navbar-brand" style="color: white">Quản lý học sinh</div>
        </div>
    </div>
</header>
<main style="padding:0  60px">
    @yield('main')
</main>
<footer></footer>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>
</html>
