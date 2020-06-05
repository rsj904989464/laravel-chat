<!-- 位于 resources/views/layouts/app.blade.php -->

<html>
<head>
    <title>@yield('t')</title>
</head>
<body>
@include('layout.header')


<div class="container">
    @yield('content')
</div>


@include('layout.footer')
</body>
</html>