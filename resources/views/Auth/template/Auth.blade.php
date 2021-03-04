<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript">
        const auth = JSON.parse(localStorage.getItem("auth_session"));
        const token = localStorage.getItem("token");
    </script>
    @if (isset($middleware))

    @if ($middleware == "auth")
    <script type="text/javascript">
        if (auth == null) {
            window.location.href = "/login";
        }else {
            if (auth.role != 2) {
                window.location.href = "/dashboard";
            } 
        }
    </script>
    @endif
    @if ($middleware == "not_auth")
    <script type="text/javascript">
        if (auth != null) {
            window.location.href = "/";
        } 
    </script>
    @endif

    @endif
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield("title")</title>
    <link rel="icon" href="{{asset("/img/logo_transparent.png")}}">
    <link rel='stylesheet' href='{{asset("/css/bootstrap.min.css")}}'>
    <link rel="stylesheet" href="{{asset($style)}}">
</head>

<body>
    <div class="blankLoad">
        <img src="{{asset("img/gif/roll1.gif")}}" alt="" width="100px">
    </div>
    @yield('content')
</body>

<script src='{{asset("/Js/popper.min.js")}}'></script>
<script src="{{asset("/Js/bootstrap.min.js")}}"></script>
<script src="{{asset("/Js/Jquery.min.js")}}"></script>
<script src="{{asset("Js/App.js")}}"></script>
<script src="{{asset("/js/auth.js")}}"></script>

<script>
    const height = document.querySelector(".card-login");
    
    if (height != null) {
        document.querySelector(".rightCard").style.height = `${height.offsetHeight}px`;
    }
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
@elseif(Session::get('error_seller'))
<script>
    Toast.fire({
      icon: "error",
      title: "Pembuatan Toko Error, Silahkan coba lagi",
    });
</script>
@endif

</html>