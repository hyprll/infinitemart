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
<script src="{{asset("/Js/Jquery.min.js")}}"></script>
<script src="{{asset("/js/auth.js")}}"></script>

<script>
    const height = document.querySelector(".card-login").offsetHeight;
    document.querySelector(".rightCard").style.height = `${height}px`;
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 5000,
    });
</script>

@if (Session::get('sukses_register'))
<script>
    Toast.fire({
      icon: "success",
      title: "Register sukses, Silahkan Login",
    });
</script>
@elseif(Session::get('error_register'))
<script>
    Toast.fire({
      icon: "error",
      title: "Register Error, Silahkan coba lagi",
    });
</script>
@elseif(Session::get('error_login'))
<script>
    Toast.fire({
      icon: "error",
      title: "Login Error, Silahkan coba lagi",
    });
</script>
@endif

</html>