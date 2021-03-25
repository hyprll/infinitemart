<!DOCTYPE html>
<html lang="en">

<head>
  <script type="text/javascript">
    let auth = JSON.parse(localStorage.getItem("auth_session"));
    const token = localStorage.getItem("token");
  </script>

  @if (isset($middleware))

  @if ($middleware == "auth")
  <script type="text/javascript">
    if (auth == null) {
            window.location.href = "http://127.0.0.1:8000/login";
        }else {
            if (auth.role != 2) {
              window.location.href = "http://127.0.0.1:8000/dashboard";
            } 
        }
  </script>
  @endif

  @if ($middleware == "user")
  <script type="text/javascript">
    if (auth != null) {
      if (auth.role != 2) {
        window.location.href = "/dashboard";
      } 
    }
  </script>
  @endif

  @endif

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>@yield('title')</title>
  <link rel='stylesheet' href='{{url("/")}}/css/bootstrap.min.css'>
  <link rel="icon" href="{{url("/")}}/img/logo_transparent.png">
  <link rel="stylesheet" href="{{url("/")}}/css/{{$css}}">
  <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>

  <!-- owl carausel -->
  <link rel="stylesheet" href="{{url("/")}}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{url("/")}}/css/owl.theme.default.min.css">

  <!-- data table -->
  <link rel="stylesheet" href="{{url("/")}}/css/DataTable/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url("/")}}/css/DataTable/responsive.bootstrap4.min.css">
</head>

<body>
  <div class="blankLoad">
    <img src="{{url("/")}}/img/gif/roll1.gif" alt="" width="100px">
  </div>

  @include('template.navbar')

  @yield('content')

  <div id="search_root"></div>

  @include('template.footer')

</body>
<script src="{{url("/")}}/js/popper.min.js" async defer></script>
<script src="{{url("/")}}/js/bootstrap.min.js" async defer></script>
<script src="https://code.iconify.design/1/1.0.6/iconify.min.js" async defer></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
<script src="{{url("/")}}/js/owl.carousel.min.js"></script>
<script src="{{url("/")}}/js/FormatMoney.js"></script>
<!-- DataTables -->
<script src="{{url("/")}}/js/DataTable/jquery.dataTables.min.js"></script>
<script src="{{url("/")}}/js/DataTable/dataTables.bootstrap4.min.js"></script>
<script src="{{url("/")}}/js/DataTable/dataTables.responsive.min.js"></script>
<script src="{{url("/")}}/js/DataTable/responsive.bootstrap4.min.js"></script>


<script src="{{url("/")}}/js/App.js"></script>
<script src="{{url("/")}}/js/Home.js"></script>
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

</html>