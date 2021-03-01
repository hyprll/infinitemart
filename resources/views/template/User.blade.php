<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>@yield('title')</title>
  <link rel='stylesheet' href='{{asset("css/bootstrap.min.css")}}'>
  <link rel="icon" href="{{asset("img/logo_transparent.png")}}">
  <link rel="stylesheet" href="{{asset("css/".$css)}}">

  <!-- owl carausel -->
  <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
  <link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css")}}">
</head>

<body>
  <div class="blankLoad">
    <img src="{{asset("img/gif/roll1.gif")}}" alt="" width="100px">
  </div>

  @include('template.navbar')

  @yield('content')

  <div id="search_root"></div>

  @include('template.footer')

</body>
<script src="{{asset("Js/popper.min.js")}}" async defer></script>
<script src="{{asset("Js/bootstrap.min.js")}}" async defer></script>
<script src="https://code.iconify.design/1/1.0.6/iconify.min.js" async defer></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
<script src="{{asset("Js/owl.carousel.min.js")}}"></script>
<script src="{{asset("Js/FormatMoney.js")}}"></script>
<script src="{{asset("Js/App.js")}}"></script>
<script src="{{asset("Js/Home.js")}}"></script>
<script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous" async defer></script>

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
@elseif(Session::get('sukses_produk'))
<script>
  Toast.fire({
      icon: "success",
      title: "Tambah Produk Sukses",
    });
</script>
@elseif(Session::get('sukses_update_produk'))
<script>
  Toast.fire({
      icon: "success",
      title: "Update Produk Sukses",
    });
</script>
@elseif(Session::get('sukses_delete_produk'))
<script>
  Toast.fire({
      icon: "success",
      title: "Hapus Produk Sukses",
    });
</script>
@elseif(Session::get('sukses_update_toko'))
<script>
  Toast.fire({
      icon: "success",
      title: "Sukses Update Toko",
    });
</script>
@elseif(Session::get('error_update_toko'))
<script>
  Toast.fire({
      icon: "error",
      title: "Error Update Toko",
    });
</script>
@elseif(Session::get('error_produk'))
<script>
  Toast.fire({
      icon: "error",
      title: "Tambah Produk Gagal",
    });
</script>
@elseif(Session::get('error_update_produk'))
<script>
  Toast.fire({
      icon: "error",
      title: "Update Produk Gagal",
    });
</script>
@endif

</html>