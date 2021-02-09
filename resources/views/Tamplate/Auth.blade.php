<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link rel="icon" href="{{asset('Assets')}}/img/logo_transparent.png">
    <link rel='stylesheet' href='{{asset('Assets')}}/css/bootstrap.min.css'>
    <link rel="stylesheet" href="{{asset('Assets')}}{{$CSS}}">
</head>

<body>
    @yield('content')
</body>

<script src='{{asset('Assets')}}/Js/popper.min.js'></script>
<script src="{{asset('Assets')}}/Js/bootstrap.min.js"></script>
<script>
</script>

</html>