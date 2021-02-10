<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link rel="icon" href="{{asset("/img/logo_transparent.png")}}">
    <link rel='stylesheet' href='{{asset("/css/bootstrap.min.css")}}'>
    <link rel="stylesheet" href="{{asset($style)}}">
</head>

<body>
    @yield('content')
</body>

<script src='{{asset("/Js/popper.min.js")}}'></script>
<script src="{{asset("/Js/bootstrap.min.js")}}"></script>
<script>
</script>

</html>