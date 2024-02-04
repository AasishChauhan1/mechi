<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('layout.header')
</head>
<body>
    @yield('content')
    @yield('list')
    @yield('editForm')
</body>
@include('layout.script')
@include('layout.footer')
</html>