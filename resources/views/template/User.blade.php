<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel='stylesheet' href='{{asset("css/bootstrap.min.css")}}'>
    <link rel="icon" href="{{asset("img/logo_transparent.png")}}">
    <link rel="stylesheet" href="{{asset("css/home.css")}}">
</head>

<body>

    @include('template.navbar')

    @yield('content')

    @include('template.footer')

</body>
<script src="{{asset("Js/popper.min.js")}}" async defer></script>
<script src="{{asset("Js/bootstrap.min.js")}}" async defer></script>
<script src="https://code.iconify.design/1/1.0.6/iconify.min.js" async defer></script>
<script src="{{asset("Js/Home.js")}}" async defer></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 5000,
    });
</script>
@if (Session::get('sukses_seller'))
<script>
    Toast.fire({
      icon: "success",
      title: "Buat Toko Sukses",
    });
</script>
@endif

</html>