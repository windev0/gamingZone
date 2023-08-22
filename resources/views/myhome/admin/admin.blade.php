<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.bootstrap.boxicons.min.css') }}">
    <title>Document</title>
</head>

<body>
    @include('myhome.sidebar')
    @yield('product-actions')
    <script src="../../assets/js/sidebar.js"></script>
    <script src="../../assets/js/sidebar.bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/sidebar.jquery.min.js"></script>
</body>

</html>
