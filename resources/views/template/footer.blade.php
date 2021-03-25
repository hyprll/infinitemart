<!-- * footer -->

<footer class="footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 left-footer">
                <h4>Indonesia, ID</h4>
                <span>Depok city of Indonesia</span><br>
                <span>Copyright 2021. all right reserved</span>
            </div>
            <div class="col-md-4 center-footer">
                <div class="d-flex justify-content-center">
                    <img src="{{asset("img/logo_transparent.png")}}" alt="" width="60px" style="margin: -3rem 0 2rem 0;">
                </div>
                <div class="wrap-footer-search">
                    <input type="text" class="form-control form-footer" placeholder="search">
                    <i class="fa fa-arrow-right footer-icon-search"></i>
                </div>
                <div class="OurTeam-footer mt-3 d-flex justify-content-center">
                {{-- @if ($css == "OurTeam.css")
                <a href="/" class="nav-link text-white">Kembali</a>
                @else
                <a href="/OurTeam" class="nav-link text-white">Our Team</a>
                @endif --}}
                </div>
            </div>
            <div class="col-md-4 right-footer">
                <div class="wrap-right-footer">
                    <i class="fa fa-phone footer-icon"></i>
                    <i class="fab fa-whatsapp footer-icon"></i>
                    <i class="fab fa-google-plus footer-icon"></i>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- ? /footer -->