<!doctype html>
<html lang="en">

<head>
    <script type="text/javascript">
        const auth = JSON.parse(localStorage.getItem("auth_session"));
        const token = localStorage.getItem("token");
        const store = JSON.parse(localStorage.getItem("store"));
    </script>

    @if ($middleware == "not_auth")
    <script type="text/javascript">
        if (auth != null) window.location.href = "http://127.0.0.1:8000";
    </script>
    @elseif($middleware == "no_store")
    <script type="text/javascript">
        if (auth == null) window.location.href = "http://127.0.0.1:8000/login";
        if (store.has_store) window.location.href = `http://127.0.0.1:8000/toko/${store.store_data.id_toko}`;
    </script>
    @endif

    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/Auth.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    @yield('content')
    <script src="{{asset('js')}}/jquery.min.js"></script>
    <script src="{{asset('js')}}/popper.js"></script>
    <script src="{{asset('js')}}/bootstrap.min.js"></script>
    <script src="{{asset("Js/App.js")}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 5000,
    });
    </script>
    <script src="{{asset('js')}}/auth.min.js"></script>
</body>

</html>