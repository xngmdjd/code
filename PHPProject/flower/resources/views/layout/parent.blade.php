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
            <a href="{{ route('flower.index') }}" style="text-decoration: none">
                <div class="navbar-brand" style="color: white">Manage Flower</div>
            </a>
            <a href="{{--{{ route('flower.show') }}--}}" style="text-decoration: none">
                <div class="navbar-brand" style="color: white">Flower Spawn Location</div>
            </a>
        </div>
    </div>
</header>
<main>
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle" style="margin-right: 5px"></i>
                {{ session('success') }}
                <div class="d-flex justify-content-end flex-grow-1">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        @yield('main')
    </div>
</main>
<footer></footer>

{{--<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript" src="{{asset('jquery/jquery.js')}}"></script>--}}
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
{{--<script>--}}
{{--        CKEDITOR.replace('content');--}}
{{--</script>--}}

<script>
    setTimeout(function() {
        document.querySelector('.alert').style.display = 'none';
    }, 3000);
</script>
</body>
</html>
