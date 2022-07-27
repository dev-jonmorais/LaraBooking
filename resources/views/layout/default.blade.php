<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name', 'Default') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body style="background-color: #f3fdf3">

<div class="container">
    <h2>{{ config('app.name', 'Default') }} - lp3bmobi.com</h2>
    @yield('content')
</div>

</body>

</html>
