<!DOCTYPE html>
<html lang="en">

<head>
  <script type="text/javascript">
    const auth = JSON.parse(localStorage.getItem("auth_session"));
    const token = localStorage.getItem("token");
  </script>
  @if (isset($middleware))

  @if ($middleware == "admin")
  <script type="text/javascript">
    if (auth == null) {
    window.location.href = "/login";
    } else {
      if (auth.role != 1) {
        window.location.href = "/";
      } 
    }
  </script>
  @endif

  @endif

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">

  <link rel="stylesheet" href="{{asset('css')}}/Admin.css">
  <link rel="icon" href="{{asset('img')}}/logo_transparent.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />
  <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>

  <!-- data table -->
  <link rel="stylesheet" href="{{asset("css/DataTable/dataTables.bootstrap4.min.css")}}">
  <link rel="stylesheet" href="{{asset("css/DataTable/responsive.bootstrap4.min.css")}}">

  <title>@yield("title")</title>
</head>

<body>

  <div class="parentWrapper">

    <div class="sideNavbar">
      <div class="container">
        <div class="BrandHeader">
          <h3>Infinite Mart</h3>
          <img src="{{'img'}}/logo_transparent.png" alt="">
        </div>
      </div>

      <div class="contentSide">
        <div class="container">

          <ul class="sideNav-link <?php echo($CekStatus == "Dasbord") ? 'activeBG' : ''  ?>">
            <li>
              <a class="nav-link <?php echo($CekStatus == "Dasbord") ? 'activeColor' : ''  ?>" href="/dashboard">
                <i class="material-icons <?php echo($CekStatus == "Dasbord") ? '' : 'dasbordIcon' ?>">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
          </ul>

          <ul class="sideNav-link <?php echo($CekStatus == "Profile") ? 'activeBG' : ''  ?> mt-2">
            <li>
              <a class="nav-link <?php echo($CekStatus == "Profile") ? 'activeColor' : ''  ?>" href="/profileAdmin">
                <i class="material-icons <?php echo($CekStatus == "Profile") ? '' : 'profileIcon'  ?>">person</i>
                <p>Profile</p>
              </a>
            </li>
          </ul>

          <ul class="sideNav-link <?php echo($CekStatus == "Product") ? 'activeBG' : ''  ?> mt-2">
            <li>
              <a class="nav-link <?php echo($CekStatus == "Product") ? 'activeColor' : ''  ?>" href="/totalProduk">
                <i
                  class="material-icons <?php echo($CekStatus == "Product") ? '' : 'totalOrderIcon'  ?>">content_paste</i>
                <p>Total Produk</p>
              </a>
            </li>
          </ul>

          <ul class="sideNav-link <?php echo($CekStatus == "DataUser") ? 'activeBG' : ''  ?> mt-2">
            <li>
              <a class="nav-link <?php echo($CekStatus == "DataUser") ? 'activeColor' : ''  ?>" href="/DataUser">
                <i
                  class="material-icons <?php echo($CekStatus == "DataUser") ? '' : 'totalUserIcon'  ?>">library_books</i>
                <p>Total User</p>
              </a>
            </li>
          </ul>


        </div>
      </div>
    </div>

    <div class="container">

      <div class="navRight d-flex justify-content-between">
        <div class="barClick">
          <i class="material-icons barIcon">menu</i>
        </div>
        <div class="profilAdmin d-flex">
          <div class="MoreProfile">
            <div class="clickValueProfile d-flex">
              <img src="{{'img'}}/Profile/Anca.jpg" class="rounded-circle clickBtnProfile" alt="">
              <p class="clickBtnProfile">Admin</p>
            </div>

            <div class="slideDown-Profile">
              <p class="text-dark" style="font-size: 12px;">Selamat Datang!</p>
              <div class="contentSlide-Profile mt-3">
                <a href="{{url("/profileAdmin")}}" class="d-flex">
                  <i class="material-icons noteIcon">tune</i>
                  <p>Profile</p>
                </a>
                <div class="lineSlide my-2"></div>
                <a href="#" id="logoutBtn" class="d-flex">
                  <i class="material-icons noteIcon">directions_run</i>
                  <p>Keluar</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      @yield("content")


      <div class="bgBlue-dasbord"></div>

    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>


  <!-- DataTables -->
  <script src="{{asset("js/DataTable/jquery.dataTables.min.js")}}"></script>
  <script src="{{asset("js/DataTable/dataTables.bootstrap4.min.js")}}"></script>
  <script src="{{asset("js/DataTable/dataTables.responsive.min.js")}}"></script>
  <script src="{{asset("js/DataTable/responsive.bootstrap4.min.js")}}"></script>

  <script src="{{asset('js')}}/apexcharts.min.js"></script>
  <script src="{{asset('js')}}/sweetalert2.all.min.js"></script>
  <script src="{{asset('js')}}/NavbarAdmin.js"></script>
  <script src="{{asset('js')}}/App.js"></script>
  <script src="{{asset('js')}}/FormatMoney.js"></script>
  <script src="{{asset('js')}}/{{$JS}}"></script>
</body>

</html>