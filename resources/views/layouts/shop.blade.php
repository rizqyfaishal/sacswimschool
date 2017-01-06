<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    {{--<meta http-equiv="refresh" content="30">--}}
    <title>{{ $page->title }}</title>
    <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
@yield('content')
<script src="../js/app.min.js"></script>
</body>
</html>