<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'INMIX 在线配镜')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    @include('layouts._header')
    <div class="container">
        <div class="offset-md-1 col-md-10">
          @yield('content')
          @include('layouts._footer')
        </div>

    </div>
</body>
</html>