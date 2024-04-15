<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-panel</title>
    <!-- <link rel="stylesheet" href="{{ asset('/css/admin.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <script src="{{asset('/bootstrap/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    @include('sidenav')
     
    @yield('content')


    <script>

    </script>
</body>
<script src="{{asset('/javascript/admin.js') }}"></script>

</html>