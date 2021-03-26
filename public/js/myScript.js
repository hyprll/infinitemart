const formatter = new FormatMoney();
setNavbar();
handleLogout();
handleBuyByModal();

function setNavbar() {
  let handler = "";
  let handler2 = "";
  if (auth != null) {
    handler = /*html*/ `
        <li>
            <a href="${BASE_URL}/profile">Profile</a>
        </li>
    `;
    if (store.has_store) {
      handler += /* html */ ` 
        <li>
          <a href="${BASE_URL}/toko/${store.store_data.id_toko}">My Store</a>
        </li>
        <li>
        <li>
            <a href="${BASE_URL}/logout" id="logout-btn">Logout</a>
        </li>
      `;
    } else {
      handler += /* html */ `
        <li>
          <a href="${BASE_URL}/seller">Open Store</a>
        </li>
        <li>
        <li>
            <a href="${BASE_URL}/logout" id="logout-btn">Logout</a>
        </li>
      `;
    }

    handler2 = /* html */ `
    <li><a href="wishlist.html">Profile</a></li>
    <li><a href="${BASE_URL}/OurTeam">Team</a></li>
    `;
  } else {
    handler = /* html */ `
        <li>
            <a href="${BASE_URL}/login">Sign In</a>
        </li>
        <li>
            <a href="${BASE_URL}/register">Sign Up</a>
        </li>
        `;
    handler2 = /* html */ `
        <li><a href="${BASE_URL}/login">Sign In</a></li>
        <li><a href="${BASE_URL}/register">Sign Up</a></li>
        <li><a href="${BASE_URL}/OurTeam">Team</a></li>
        `;
  }
  $("#nav-account").html(handler);
  $("#nav-account2").html(handler);
  $("#nav-slide-link").html(handler2);
  $("#nav-slide-link2").html(handler2);
}

// * section home
if ($("#homeSectionReadOnly").length > 0) {
  showAllProduk();
  handleDetailProduk();
  showBestSeller();
}

// * section detail
if ($("#detailSectionReadOnly").length > 0) {
  const id_produk = document.querySelector("#idProduk").dataset.idproduk;
  showAllProduk();
  handleDetailProduk();

  showDetail(id_produk);

  $("#btn-checkout-detail").click(function (e) {
    e.preventDefault();
    if (validateCheckout()) {
      checkout(
        $("#idtoko").val(),
        $("#hargaBarang").val(),
        $("#namaBarang").val(),
        $("#userbeli").val(),
        $("#note").val(),
        $("#quantity").val(),
        document.querySelector("#idProduk").dataset.idproduk
      );
    }
  });

  function validateCheckout() {
    let turn = true;
    if ($("#note").val() == "") {
      turn = false;
      $(".note-validate").html("harus diisi");
    } else {
      $(".note-validate").html("");
    }

    if ($("#quantity").val() == "") {
      turn = false;
      $(".quantity-validate").html("harus diisi");
    } else {
      if ($("#quantity").val() == 0) {
        turn = false;
        $(".quantity-validate").html("harus lebih dari 0");
      } else {
        $(".quantity-validate").html("");
      }
    }

    return turn;
  }
}

// * section our team
if ($("#sectionOurTeamReadonly").length > 0) {
  $(".WrapperOwl").owlCarousel({
    margin: 20,
    loop: true,
    autoWidth: true,
    items: 4,
    autoplay: true,
    autoplayTimeout: 5000,
  });
}

// * section profile
if ($("#profileSectionReadOnly").length > 0) {
  showProfile();
  if (getLocation()) {
    document.getElementById("btn-history").click();
  }

  getHistory();

  $("#form-update-profile").submit(function (e) {
    e.preventDefault();
    updateProfile();
  });

  $("#logout-profile").click(function (e) {
    e.preventDefault();
    localStorage.removeItem("token");
    localStorage.removeItem("auth_session");
    localStorage.removeItem("store");
    document.location.href = BASE_URL + "/login";
  });
}

// * section searching
if ($("#searchSectionReadOnly").length > 0) {
  const keyword = document.querySelector("#searchSectionReadOnly").dataset
    .keyword;
  searchingNow(keyword);
  handleDetailProduk();
}

// * section toko
let showEditToko = false;
let showHistory = false;
if ($("#tokoSectionReadOnly").length > 0) {
  const toko = document.querySelector("#tokoSectionReadOnly").dataset.toko;
  let myStore = false;
  if (store.has_store) {
    if (store.store_data.id_toko == toko) {
      myStore = true;
    }
  }

  dashboardToko(toko, myStore);
  showTokoProduk(toko, myStore);
  handleDetailProduk();
  getHistoryToko(toko);

  document.body.addEventListener("click", function (e) {
    if (e.target.getAttribute("id") == "btn-to-edit") {
      e.preventDefault();
      showEditToko = !showEditToko;
      if (showEditToko) {
        $(".non-update").hide();
        $("#update-toko-section").show();
        e.target.innerHTML = "Back";
      } else {
        $(".non-update").show();
        $("#update-toko-section").hide();
        e.target.innerHTML = "Edit Store";
      }
    }else if (e.target.getAttribute("id") == "btn-to-history" || e.target.parentNode.getAttribute("id") == "btn-to-history") {
      e.preventDefault();
      showHistory = !showHistory;
      if (showHistory) {
        if (e.target.getAttribute("id") == "btn-to-history") {
          e.target.innerHTML = "Back";
        }else {
          e.target.parentNode.innerHTML = "Back";
        }
        $("#produkToko").hide();
        $("#historyToko").show();
      } else {
        if (e.target.getAttribute("id") == "btn-to-history") {
          e.target.innerHTML = `<i class="fa fa-history"></i>`;
        }else {
          e.target.parentNode.innerHTML = `<i class="fa fa-history"></i>`;
        }
        $("#produkToko").show();
        $("#historyToko").hide();
      }
    }
  });
  handleUpdateToko();
  handleDeleteProduk();
}

// * function for show all produk
function showAllProduk() {
  $.ajax({
    url: BASE_URL_SERVER + "/produk",
    type: "GET",
    success: function (res) {
      let handler = "";
      if (res.success) {
        res.data.map((result) => {
          handler += /* html */ `
            <div class="product-default-single-item product-color--golden swiper-slide">
                <div class="image-box">
                    <a href="${BASE_URL}/detail/${
            result.id_produk
          }" class="image-link">
                        <img src="${BASE_URL_FILE}/uploads/produk/${
            result.gambar
          }" alt="" style="height:250px;">
                        <img src="${BASE_URL_FILE}/uploads/produk/${
            result.gambar_lain
          }" alt="" style="height:250px;">
                    </a>
                    <div class="tag">
                        <span>sale</span>
                    </div>
                    <div class="action-link">
                        <div class="action-link-left">
                            <a href="" id="showQuickViewProduct" data-bs-toggle="modal" data-bs-target="#modalQuickview" data-idproduk="${
                              result.id_produk
                            }">Buy
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="content-left">
                        <h6 class="title"><a href="${BASE_URL}/detail/${
            result.id_produk
          }">${result.nama_produk}</a></h6>
                        <ul class="review-star">
                            Stock Available
                        </ul>
                    </div>
                    <div class="content-right">
                        <span class="price">${formatter.toRupiah(
                          result.harga
                        )}</span>
                    </div>

                </div>
            </div>
            `;
        });
        if ($("#produk-all").length > 0) {
          $("#produk-all").html(handler);
          setSlider();
        }
      }
    },
    error: function (e) {
      alert("error");
      console.log(e);
    },
  });
}

function setSlider() {
  /****************************************
   *   Product Slider Active - 4 Grid 2 Rows
   *****************************************/
  var productSlider4grid2row = new Swiper(
    ".product-default-slider-4grid-2row.swiper-container",
    {
      slidesPerView: 4,
      spaceBetween: 30,
      speed: 1500,
      slidesPerColumn: 2,
      slidesPerColumnFill: "row",

      navigation: {
        nextEl: ".product-slider-default-2rows .swiper-button-next",
        prevEl: ".product-slider-default-2rows .swiper-button-prev",
      },

      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        576: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 3,
        },
        1200: {
          slidesPerView: 4,
        },
      },
    }
  );
}

function setSlider1row() {
  /*********************************************
   *   Product Slider Active - 4 Grid Single Rows
   **********************************************/
  var productSlider4grid1row = new Swiper(
    ".product-default-slider-4grid-1row.swiper-container",
    {
      slidesPerView: 4,
      spaceBetween: 30,
      speed: 1500,

      navigation: {
        nextEl: ".product-slider-default-1row .swiper-button-next",
        prevEl: ".product-slider-default-1row .swiper-button-prev",
      },

      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        576: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 3,
        },
        1200: {
          slidesPerView: 4,
        },
      },
    }
  );
}

function setSliderDetail() {
  /******************************************************
   * Quickview Product Gallery - Horizontal
   ******************************************************/
  var modalGalleryThumbs = new Swiper(".modal-product-image-thumb", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var modalGalleryTop = new Swiper(".modal-product-image-large", {
    thumbs: {
      swiper: modalGalleryThumbs,
    },
  });
}

function handleDetailProduk() {
  document.body.addEventListener("click", function (e) {
    if (e.target.getAttribute("id") == "showQuickViewProduct") {
      const id_produk = e.target.dataset.idproduk;
      const modal = document.querySelector("#quickViewModal1");
      const modal2 = document.querySelector("#quickViewModal2");
      const img_main1 = modal.childNodes[1].childNodes[1];
      const img_main2 = modal.childNodes[3].childNodes[1];
      const img_other1 = modal2.childNodes[1].childNodes[1];
      const img_other2 = modal2.childNodes[3].childNodes[1];

      img_main1.setAttribute("src", "");
      img_main2.setAttribute("src", "");
      img_other1.setAttribute("src", "");
      img_other2.setAttribute("src", "");
      $("#idtokoQuickView").val("");
      $("#hargaBarangQuickView").val("");
      $("#namaBarangQuickView").val("");
      $("#userbeliQuickView").val("");
      $.ajax({
        url: BASE_URL_SERVER + "/produk/" + id_produk,
        type: "GET",
        success: function (res) {
          if (res.success) {
            const data = res.data[0];
            $("#idprodukQuickView").val(id_produk);
            $("#idtokoQuickView").val(data.id_toko);
            $("#hargaBarangQuickView").val(data.harga);
            $("#namaBarangQuickView").val(data.nama_produk);
            $("#userbeliQuickView").val(data.user_beli);
            setGambar(data, img_main1, img_main2, img_other1, img_other2);
            $("#detailQuickViewTitle").html(data.nama_produk);
            $("#detailQuickViewFare").html(formatter.toRupiah(data.harga));
            setSliderDetail();
          }
        },
        error: function () {
          alert("error");
        },
      });
    }
  });

  function setGambar(data, img_main1, img_main2, img_other1, img_other2) {
    img_main1.setAttribute(
      "src",
      BASE_URL_FILE + "/uploads/produk/" + data.gambar
    );
    img_main2.setAttribute(
      "src",
      BASE_URL_FILE + "/uploads/produk/" + data.gambar_lain
    );
    img_other1.setAttribute(
      "src",
      BASE_URL_FILE + "/uploads/produk/" + data.gambar
    );
    img_other2.setAttribute(
      "src",
      BASE_URL_FILE + "/uploads/produk/" + data.gambar_lain
    );
  }
}

function showDetail(id_produk) {
  $.ajax({
    url: BASE_URL_SERVER + "/produk/" + id_produk,
    type: "GET",
    success: function (res) {
      if (res.success) {
        const data = res.data[0];
        $(".titleDetail").html(data.nama_produk);
        $(".priceDetail").html(formatter.toRupiah(data.harga));

        $("#idtoko").val(data.id_toko);
        $("#hargaBarang").val(data.harga);
        $("#namaBarang").val(data.nama_produk);
        $("#userbeli").val(data.user_beli);

        setGambarDetail(data);
      }
    },
    error: function () {
      alert("error");
    },
  });

  function setGambarDetail(data) {
    $(".imgDetailMain1").attr(
      "src",
      BASE_URL_FILE + "/uploads/produk/" + data.gambar
    );
    $(".imgDetailMain2").attr(
      "src",
      BASE_URL_FILE + "/uploads/produk/" + data.gambar_lain
    );
    $(".imgOtherDetailMain1").attr(
      "src",
      BASE_URL_FILE + "/uploads/produk/" + data.gambar
    );
    $(".imgOtherDetailMain2").attr(
      "src",
      BASE_URL_FILE + "/uploads/produk/" + data.gambar_lain
    );
  }
}

function handleLogout() {
  document.body.addEventListener("click", function (e) {
    if (e.target.getAttribute("id") == "logout-btn") {
      e.preventDefault();
      localStorage.removeItem("token");
      localStorage.removeItem("auth_session");
      localStorage.removeItem("store");
      document.location.href = BASE_URL + "/login";
    }
  });
}

// * function for checkout
function checkout(
  idToko,
  harga,
  nama_barang,
  user_beli,
  note,
  quantity,
  id_produk
) {
  $(".blankLoad").show();
  $(".blankLoad").css("display", "flex");
  document.body.style.overflowY = "hidden";
  // * cek apakah user boleh beli atau tidak

  const id_user = auth.id_user;
  const user_beli_split = user_beli.split(",");
  if (user_beli == "all") {
    // * mulai transaksi

    let today = new Date();

    let date =
      today.getFullYear() +
      "-" +
      (today.getMonth() + 1 < 10 ? "0" : "") +
      (today.getMonth() + 1) +
      "-" +
      (today.getDate() + 1 < 10 ? "0" : "") +
      today.getDate() +
      " " +
      today.getHours() +
      ":" +
      today.getMinutes() +
      ":" +
      today.getSeconds();

    let form = new FormData();
    form.append("id_produk", id_produk);
    form.append("id_user", auth.id_user);
    form.append("id_toko", idToko);
    form.append("tanggal", date);
    form.append("deskripsi", note);
    form.append("total_barang", quantity);
    form.append("harga", harga);
    form.append("status", 1);
    form.append("first_name", auth.first_name);
    form.append("last_name", auth.last_name);
    form.append("address", auth.address);
    form.append("city", auth.city);
    form.append("postal_code", auth.postal_code);
    form.append("phone", auth.phone);
    form.append("country_code", auth.country_code);
    form.append("barang", nama_barang);

    $.ajax({
      url: BASE_URL_SERVER + "/payment/midtrans",
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        Authorization: "Bearer " + token,
      },
      data: form,
      method: "POST",
      dataType: "json",
      cache: false,
      contentType: false,
      processData: false,
      success: (res) => {
        $("#modalQuickview").modal("hide");
        $(".blankLoad").hide();
        document.body.style.overflowY = "auto";
        if (res.status != null) {
          errorToken();
        }

        if (res.code == 1) {
          Toast.fire({
            icon: "success",
            title: "Sukses Memesan Produk, selesaikan pembayaran",
          });
          let strWindowFeatures =
            "location=yes,height=650,width=520,scrollbars=yes,status=yes";
          let URL = res.redirect_url;
          window.open(URL, "_blank", strWindowFeatures);
        }
      },
      error: (err) => {
        $(".blankLoad").hide();
        document.body.style.overflowY = "auto";
        Toast.fire({
          icon: "error",
          title: "Error Pesan Produk",
        });
        const error = err.responseJSON;
        console.log(err.responseText);
      },
    });
  } else {
    if (user_beli_split.indexOf(id_user.toString()) == -1) {
      $("#modalQuickview").modal("hide");
      $(".blankLoad").hide();
      document.body.style.overflowY = "auto";
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Kamu tidak diizinkan membeli barang ini!",
      });
    } else {
      // * mulai transaksi

      let today = new Date();

      let date =
        today.getFullYear() +
        "-" +
        (today.getMonth() + 1 < 10 ? "0" : "") +
        (today.getMonth() + 1) +
        "-" +
        (today.getDate() + 1 < 10 ? "0" : "") +
        today.getDate() +
        " " +
        today.getHours() +
        ":" +
        today.getMinutes() +
        ":" +
        today.getSeconds();

      let form = new FormData();
      form.append(
        "id_produk",
        document.querySelector("#idProduk").dataset.idproduk
      );
      form.append("id_user", auth.id_user);
      form.append("id_toko", idToko);
      form.append("tanggal", date);
      form.append("deskripsi", note);
      form.append("total_barang", quantity);
      form.append("harga", harga);
      form.append("status", 1);
      form.append("first_name", auth.first_name);
      form.append("last_name", auth.last_name);
      form.append("address", auth.address);
      form.append("city", auth.city);
      form.append("postal_code", auth.postal_code);
      form.append("phone", auth.phone);
      form.append("country_code", auth.country_code);
      form.append("barang", nama_barang);

      $.ajax({
        url: BASE_URL_SERVER + "/payment/midtrans",
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          Authorization: "Bearer " + token,
        },
        data: form,
        method: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData: false,
        success: (res) => {
          $(".blankLoad").hide();
          document.body.style.overflowY = "auto";
          if (res.status != null) {
            if (res.status == "Token is Expired") {
              errorToken();
            }
          }

          if (res.code == 1) {
            Toast.fire({
              icon: "success",
              title: "Sukses Memesan Produk, selesaikan pembayaran",
            });
            let strWindowFeatures =
              "location=yes,height=650,width=520,scrollbars=yes,status=yes";
            let URL = res.redirect_url;
            window.open(URL, "_blank", strWindowFeatures);
          }
        },
        error: (err) => {
          $(".blankLoad").hide();
          document.body.style.overflowY = "auto";
          Toast.fire({
            icon: "error",
            title: "Error Pesan Produk",
          });
          const error = err.responseJSON;
          console.log(error);
        },
      });
    }
  }
}

function handleBuyByModal() {
  $("#btnBuyQuickView").click(function () {
    if (validateCheckoutModal()) {
      if (auth == null) {
        notLoginYet();
      } else {
        checkout(
          $("#idtokoQuickView").val(),
          $("#hargaBarangQuickView").val(),
          $("#namaBarangQuickView").val(),
          $("#userbeliQuickView").val(),
          $("#noteQuickView").val(),
          $("#quantityQuickView").val(),
          $("#idprodukQuickView").val()
        );
      }
    }
  });

  function validateCheckoutModal() {
    let turn = true;
    if ($("#noteQuickView").val() == "") {
      turn = false;
      $(".noteQuickView-validate").html("harus diisi");
    } else {
      $(".noteQuickView-validate").html("");
    }

    if ($("#quantityQuickView").val() == "") {
      turn = false;
      $(".quantityQuickView-validate").html("harus diisi");
    } else {
      if ($("#quantityQuickView").val() == 0) {
        turn = false;
        $(".quantityQuickView-validate").html("harus lebih dari 0");
      } else {
        $(".quantityQuickView-validate").html("");
      }
    }

    return turn;
  }
}

function showBestSeller() {
  $.ajax({
    url: BASE_URL_SERVER + "/bestproduk",
    type: "GET",
    success: function (res) {
      let handler = "";
      if (res.success) {
        res.data.map((result) => {
          handler += /* html */ `
            <div class="product-default-single-item product-color--golden swiper-slide">
                <div class="image-box">
                    <a href="${BASE_URL}/detail/${
            result.id_produk
          }" class="image-link">
                        <img src="${BASE_URL_FILE}/uploads/produk/${
            result.gambar
          }" alt="" style="height:250px;">
                        <img src="${BASE_URL_FILE}/uploads/produk/${
            result.gambar_lain
          }" alt="" style="height:250px;">
                    </a>
                    <div class="tag">
                        <span>sale</span>
                    </div>
                    <div class="action-link">
                        <div class="action-link-left">
                            <a href="" id="showQuickViewProduct" data-bs-toggle="modal" data-bs-target="#modalQuickview" data-idproduk="${
                              result.id_produk
                            }">Buy
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="content-left">
                        <h6 class="title"><a href="${BASE_URL}/detail/${
            result.id_produk
          }">${result.nama_produk}</a></h6>
                        <ul class="review-star">
                            Stock Available
                        </ul>
                    </div>
                    <div class="content-right">
                        <span class="price">${formatter.toRupiah(
                          result.harga
                        )}</span>
                    </div>

                </div>
            </div>
            `;
        });

        if ($("#produk-slider").length > 0) {
          $("#produk-slider").html(handler);
          setSlider1row();
        }
      }
    },
    error: function (e) {
      alert("error");
      console.log(e);
    },
  });
}

// * function for searching
function searchingNow(keyword) {
  $.ajax({
    url: BASE_URL_SERVER + "/findproduk?keyword=" + keyword,
    type: "GET",
    success: function (res) {
      let handler = "";
      let handler2 = "";
      if (res.success) {
        res.data.map((result) => {
          handler += /* html */ `
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
              <div class="product-default-single-item product-color--golden swiper-slide">
                <div class="image-box">
                    <a href="${BASE_URL}/detail/${
            result.id_produk
          }" class="image-link">
                        <img src="${BASE_URL_FILE}/uploads/produk/${
            result.gambar
          }" alt="" style="height:250px;">
                        <img src="${BASE_URL_FILE}/uploads/produk/${
            result.gambar_lain
          }" alt="" style="height:250px;">
                    </a>
                    <div class="tag">
                        <span>sale</span>
                    </div>
                    <div class="action-link">
                        <div class="action-link-left">
                            <a href="" id="showQuickViewProduct" data-bs-toggle="modal" data-bs-target="#modalQuickview" data-idproduk="${
                              result.id_produk
                            }">Buy
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="content-left">
                        <h6 class="title"><a href="${BASE_URL}/detail/${
            result.id_produk
          }">${result.nama_produk}</a></h6>
                        <ul class="review-star">
                            Stock Available
                        </ul>
                    </div>
                    <div class="content-right">
                        <span class="price">${formatter.toRupiah(
                          result.harga
                        )}</span>
                    </div>

                </div>
            </div>
            </div>
            `;

          handler2 += /* html */ `
          <div class="col-12 mb-3">
            <div class="product-list-single product-color--golden mb-3">
                <a href="${BASE_URL}/detail/${result.id_produk}"
                    class="product-list-img-link">
                    <img class="img-fluid"
                        src="${BASE_URL_FILE}/uploads/produk/${result.gambar}"
                        alt=""
                        style="width:40vw;">
                    <img class="img-fluid"
                        src=
                        "${BASE_URL_FILE}/uploads/produk/${result.gambar_lain}"
                        alt=""
                        style="width:40vw;">
                </a>
                <div class="product-list-content">
                    <h5 class="product-list-link"><a
                            href="${BASE_URL}/detail/${result.id_produk}">
                            ${result.nama_produk}
                            </a></h5>
                    <span class="product-list-price">
                    ${formatter.toRupiah(result.harga)}
                    </span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Nobis ad, iure incidunt. Ab consequatur temporibus non
                        eveniet inventore doloremque necessitatibus sed, ducimus
                        quisquam, ad asperiores</p>
                    <div class="product-action-icon-link-list">
                        <a href="#" id="showQuickViewProduct" data-bs-toggle="modal"
                            data-bs-target="#modalQuickview"
                            data-idproduk="${result.id_produk}"
                            class="btn btn-lg btn-black-default-hover">
                          Buy Now    
                        </a>
                    </div>
                </div>
          </div>
          `;
        });

        if ($("#searchResult").length > 0) {
          $("#searchResult").html(handler);
          $("#searchResultFullWidth").html(handler2);
        }
      }
    },
    error: function (err) {
      let res = err.responseJSON;
      if ($("#searchResult").length > 0) {
        $("#searchResult").html(notFound());
        $("#searchResultFullWidth").html(notFound());
      }
    },
  });
}

function notFound() {
  let handler = /* html */ `
  <div class="col-12" style="margin-top: 5rem">
    <div class="row justify-content-center">
        <img src="${BASE_URL_FILE}/img/character/INTIP.png" alt=""
            class="user-select-none" style="width: 500px">
        <h2 class="text-center">Product Not Found</h2>
    </div>
  </div>
  `;

  return handler;
}

function updateProfile() {
  $("#btn-save-profile").attr("disabled", true);
  let form = new FormData();
  form.append("username", $("#username-me").val());
  form.append("email", auth.email);
  form.append("first_name", $("#first-name-me").val());
  form.append("last_name", $("#last-name-me").val());
  form.append("phone", $("#phone-me").val());
  form.append("id_user", auth.id_user);
  form.append("country_code", auth.country_code);
  form.append("postal_code", $("#postal-code-me").val());
  form.append("address", $("#address-me").val());
  form.append("city", auth.city);

  $.ajax({
    url: BASE_URL_SERVER + "/user/update",
    type: "POST",
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      Authorization: "Bearer " + token,
    },
    method: "POST",
    data: form,
    dataType: "json",
    cache: false,
    contentType: false,
    processData: false,
    success: function (res) {
      $("#btn-save-profile").attr("disabled", false);
      if (res.success) {
        Toast.fire({
          icon: "success",
          title: "Update Profile Sukses",
        });
        // * reset session
        localStorage.removeItem("auth_session");
        localStorage.setItem("auth_session", JSON.stringify(res.data));
        auth = JSON.parse(localStorage.getItem("auth_session"));

        showProfile();
      }
    },
    error: (err) => {
      Toast.fire({
        icon: "error",
        title: "Update Profile Error",
      });
      $("#btn-save-profile").attr("disabled", false);
      const error = err.responseJSON;
      if (error != null) {
        const keys = Object.keys(error);
        const validation = Array.from(
          document.querySelectorAll(".validation-server-profile")
        );
        keys.map((key) => {
          const value = eval("error." + key);
          if (key == "first_name") {
            $("#first-name-me").addClass("is-invalid");
            validation[0].innerHTML = value[0];
          } else if (key == "last_name") {
            $("#last-name-me").addClass("is-invalid");
            validation[1].innerHTML = value[0];
          } else if (key == "postal_code") {
            $("#postal-code-me").addClass("is-invalid");
            validation[4].innerHTML = value[0];
          } else if (key == "username") {
            $("#username-me").addClass("is-invalid");
            validation[2].innerHTML = value[0];
          } else if (key == "phone") {
            $("#phone-me").addClass("is-invalid");
            validation[3].innerHTML = value[0];
          } else if (key == "address") {
            $("#address-me").addClass("is-invalid");
            validation[5].innerHTML = value[0];
          } else {
            $("#address-me").removeClass("is-invalid");
            $("#phone-me").removeClass("is-invalid");
            $("#postal-code-me").removeClass("is-invalid");
            $("#username-me").removeClass("is-invalid");
            $("#last-name-me").removeClass("is-invalid");
            $("#first-name-me").removeClass("is-invalid");
            validation[0].innerHTML = "";
            validation[1].innerHTML = "";
            validation[2].innerHTML = "";
            validation[3].innerHTML = "";
            validation[4].innerHTML = "";
            validation[5].innerHTML = "";
          }
        });
      }
    },
  });
}

function showProfile() {
  $("#email-me").html(auth.email);
  $("#first-name-me").val(auth.first_name);
  $("#last-name-me").val(auth.last_name);
  $("#username-me").val(auth.username);
  $("#phone-me").val(auth.phone);
  $("#postal-code-me").val(auth.postal_code);
  $("#address-me").val(auth.address);
}

function getLocation() {
  const has_tab = window.location.href.split("?tab=");
  if (has_tab.length > 1) {
    return true;
  } else {
    return false;
  }
}

function getHistory() {
  $.ajax({
    url: BASE_URL_SERVER + "/checkout/user/" + auth.id_user,
    type: "GET",
    success: function (res) {
      if (res.success) {
        let handler = setHistory(res.data);
        $("#history-users").html(handler);
      }
    },
    error: (err) => {
      console.log(err);
    },
  });
}

function setHistory(data) {
  let handler = "";
  data.map((d, i) => {
    handler += /* html */ `
    <tr>
      <td class="product_remove">
          ${i + 1}
      </td>
      <td class="product_thumb"><a href="${BASE_URL}/detail/${d.id_produk}"><img
                  src="${BASE_URL_FILE}/uploads/produk/${d.gambar}"
                  alt=""></a></td>
      <td class="product_name"><a href="${BASE_URL}/detail/${d.id_produk}">
        ${d.nama_produk}
      </a></td>
      <td class="product-price">${formatter.toRupiah(d.harga)}</td>
      <td class="product_stock">${d.status == 1 ? "Paid Off" : "Not Paid"}</td>
    </tr>
    `;
  });

  return handler;
}

function dashboardToko(id_toko, myStore) {
  $.ajax({
    url: BASE_URL_SERVER + `/toko/${id_toko}`,
    type: "GET",
    success: function (res) {
      if (res.success) {
        const data = res.data[0];
        $("#bgToko").css(
          "background",
          `url(${BASE_URL_FILE}/uploads/toko/${data.background})`
        );
        $("#logoToko").attr(
          "src",
          `${BASE_URL_FILE}/uploads/toko/${data.logo}`
        );
        $("#namaToko").html(data.nama_toko);
        $("#deskripsiToko").html(nl2br(data.deskripsi));

        if (myStore) {
          let handler = /* html */ `
          <div class="ps-block__user-content" id="update-toko-section">
            <form action="" id="form-update-toko">
              <div class="row" style="width: 70vw">
                  <div class="col-md-6">
                      <div class="row">
                          <div class="col-12">
                              <label for="store-name" class="form-label">Store Name</label>
                              <input type="text" id="store-name" value="${data.nama_toko}"
                                  class="form-control w-100 bg-white mb-3 p-3">
                              <small class="validation text-danger edit-toko-content"></small>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12">
                              <label for="store-deskripsion" class="form-label">Store Deskripsion</label>
                              <textarea name="" id="store-deskripsion" class="form-control bg-white p-3"
                                  style="min-height: 150px">${data.deskripsi}</textarea>
                              <small class="validation text-danger edit-toko-content"></small>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="row">
                          <div class="col-12 mb-3">
                              <label for="store-logo" class="form-label">Change Logo</label>
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input bg-white" id="store-logo" Accept="image/jpg,image/png,image/jpeg">
                              </div>
                              <small class="text-danger validation-server"></small>
                          </div>
                          <div class="col-12">
                              <label for="store-bg" class="form-label">Change Background</label>
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input bg-white" id="store-bg" Accept="image/jpg,image/png,image/jpeg">
                              </div>
                              <small class="text-danger validation-server"></small>
                          </div>
                          <div class="col-12 mt-3">
                              <button class="btn btn-lg btn-black-default-hover" style="width: 200px" type="submit" id="btn-submit-toko">
                                  Submit
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
            </form>
        </div>
          `;
          let handler2 = /* html */ `
          <div class="row justify-content-end d-flex w-100">
            <a href="#" class="btn btn-lg btn-black-default-hover" style="width: 200px" id="btn-to-edit">
                Edit Store
            </a>
            <a href="#" class="btn btn-lg btn-black-default-hover mx-3 mt-3 mt-lg-0" style="width: auto" id="btn-to-history">
                <i class="fa fa-history"></i>
            </a>
            <a href="#" class="btn btn-lg btn-black-default-hover mt-3 mt-lg-0" style="width: auto">
                <i class="fa fa-plus"></i>
            </a>
        </div>
          `;
          $("#toko-content").append(handler);
          $("#mystore-content").html(handler2);
        }

        showEditToko = false;
        $(".non-update").show();
        $("#update-toko-section").hide();
      }
    },
    error: function (err) {
      alert("error");
    },
  });
}

function showTokoProduk(idToko, myStore) {
  $.ajax({
    url: BASE_URL_SERVER + `/produk/toko/${idToko}`,
    type: "GET",
    success: function (res) {
      if (res.success) {
        let handler = "";
        let handler2 = "";
        res.data.map((result) => {
          handler += handleTokoProduk(result, myStore);
          handler2 += handleTokoProduk2(result, myStore);
        });
        $("#productStore").html(handler);
        $("#productStore2").html(handler2);
      } else {
        if (document.querySelector("#productStore") !== null) {
          document.querySelector("#productStore").innerHTML = notFound();
          document.querySelector("#productStore2").innerHTML = notFound();
        }
      }
    },
    error: function (err) {
      if (err != null) {
        const message = err.responseJSON.message;
        if (document.querySelector("#productStore") !== null) {
          document.querySelector("#productStore").innerHTML = notFound();
          document.querySelector("#productStore2").innerHTML = notFound();
        }
      }
    },
  });
}

function handleTokoProduk(data, myStore) {
  function thisIsMyStore(store) {
    if (store) {
      return /* html */ `
      <div class="action-link-right">
        <a href="${BASE_URL}/delete/${data.id_produk}"><i
                class="fa fa-trash-alt" data-idproduk="${data.id_produk}" id="btn-delete-produk"></i></a>
        <a href="${BASE_URL}/edit/${data.id_produk}"><i
                class="fa fa-edit"></i></a>
    </div>
      `;
    } else {
      return "";
    }
  }

  let handler = /* html */ `
  <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
    <div class="product-default-single-item product-color--golden swiper-slide">
        <div class="image-box">
            <a href="${BASE_URL}/detail/${data.id_produk}" class="image-link">
                <img src="${BASE_URL_FILE}/uploads/produk/${data.gambar}"
                    alt="" style="height:250px;">
                <img src="${BASE_URL_FILE}/uploads/produk/${data.gambar_lain}"
                    alt="" style="height:250px;">
            </a>
            <div class="tag">
                <span>sale</span>
            </div>
            <div class="action-link">
                <div class="action-link-left">
                    <a href="" id="showQuickViewProduct"
                        data-bs-toggle="modal"
                        data-bs-target="#modalQuickview" data-idproduk="${
                          data.id_produk
                        }">
                        Buy
                        Now</a>
                </div>
                ${thisIsMyStore(myStore)}
            </div>
        </div>
        <div class="content">
            <div class="content-left">
                <h6 class="title">
                  <a href="${BASE_URL}/detail/${data.id_produk}">
                    ${data.nama_produk}
                  </a>
                </h6>
                <ul class="review-star">
                    Stock Available
                </ul>
            </div>
            <div class="content-right">
                <span class="price">${formatter.toRupiah(data.harga)}</span>
            </div>

        </div>
    </div>
  </div>
  `;

  return handler;
}

function handleTokoProduk2(data, myStore) {
  function thisIsMyStore(store) {
    if (store) {
      return /* html */ `
      <a href="${BASE_URL}/delete/${data.id_produk}" class="btn btn-lg btn-black-default-hover" id="btn-delete-produk-row" data-idproduk="${data.id_produk}">
        <i class="fa fa-trash-alt"></i>
      </a>
      <a href="${BASE_URL}/edit/${data.id_produk}" class="btn btn-lg btn-black-default-hover">
        <i class="fa fa-edit"></i>
      </a>
      `;
    } else {
      return "";
    }
  }

  let handler = /* html */ `
  <div class="col-12">
    <div class="product-list-single product-color--golden mb-3">
      <a href="${BASE_URL}/detail/${
    data.id_produk
  }" class="product-list-img-link">
        <img class="img-fluid" src="${BASE_URL_FILE}/uploads/produk/${
    data.gambar
  }" alt="" style="width:40vw;">
        <img class="img-fluid" src="${BASE_URL_FILE}/uploads/produk/${
    data.gambar_lain
  }" alt="" style="width:40vw;">
      </a>
      <div class="product-list-content">
        <h5 class="product-list-link">
          <a href="${BASE_URL}/detail/${data.id_produk}">
            ${data.nama_produk}
          </a>
        </h5>
        <span class="product-list-price">${formatter.toRupiah(
          data.harga
        )}</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores</p>
        <div class="product-action-icon-link-list">
            <a href="#" id="showQuickViewProduct" data-bs-toggle="modal"
              data-bs-target="#modalQuickview" data-idproduk="${data.id_produk}"
              class="btn btn-lg btn-black-default-hover">Buy Now</a>
            ${thisIsMyStore(myStore)}
        </div>
      </div>
    </div>
  </div>
  `;

  return handler;
}

function nl2br(str, is_xhtml) {
  if (typeof str === "undefined" || str === null) {
    return "";
  }
  var breakTag =
    is_xhtml || typeof is_xhtml === "undefined" ? "<br />" : "<br>";
  return (str + "").replace(
    /([^>\r\n]?)(\r\n|\n\r|\r|\n)/g,
    "$1" + breakTag + "$2"
  );
}

function handleUpdateToko() {
  document.body.addEventListener("change", function (e) {
    if (e.target.getAttribute("id") == "store-logo") {
      const input = document.getElementById("store-logo");
      const imgPreview = document.querySelector("#logoToko");

      const file = new FileReader();
      file.readAsDataURL(input.files[0]);

      file.onload = function (e) {
        imgPreview.src = e.target.result;
      };
    } else if (e.target.getAttribute("id") == "store-bg") {
      const input = document.getElementById("store-bg");
      const imgPreview = document.querySelector("#bgToko");

      const file = new FileReader();
      file.readAsDataURL(input.files[0]);

      file.onload = function (e) {
        $(imgPreview).css("background", `url(${e.target.result})`);
      };
    }
  });

  document.body.addEventListener("submit", function (e) {
    if (e.target.getAttribute("id") == "form-update-toko") {
      e.preventDefault();
      const validation = Array.from(document.querySelectorAll(".validation"));
      let success = true;
      validation.map((v, i) => {
        let input = v.parentNode.childNodes[3];

        if (input.value == "") {
          success = false;
          input.classList.add("is-invalid");
          v.innerHTML = "Harus diisi";
        } else if (input.value.length < 6) {
          success = false;
          input.classList.add("is-invalid");
          v.innerHTML = "Minimal 6 karakter";
        } else {
          input.classList.remove("is-invalid");
          input.classList.add("is-valid");
          v.innerHTML = "";
        }
      });
      if (success) {
        updateToko(store.store_data.id_toko);
      }
    }
  });
}

function updateToko(id_toko) {
  let logo = document.getElementById("store-logo").files;
  let bg = document.getElementById("store-bg").files;
  let namaToko = $("#store-name").val();

  let form = new FormData();
  if (logo.length > 0) {
    form.append("logo", logo[0]);
  }
  if (bg.length > 0) {
    form.append("background", bg[0]);
  }
  form.append("nama_toko", namaToko);
  form.append("deskripsi", $("#store-deskripsion").val());
  form.append("id_toko", id_toko);
  form.append("id_user", auth.id_user);
  form.append("logo_old", store.store_data.logo);
  form.append("bg_old", store.store_data.background);
  $("#btn-submit-toko").attr("disabled", true);

  $.ajax({
    url: BASE_URL_SERVER + "/toko/update",
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      Authorization: "Bearer " + token,
    },
    data: form,
    method: "POST",
    dataType: "json",
    cache: false,
    contentType: false,
    processData: false,
    success: (res) => {
      $("#btn-submit-toko").attr("disabled", false);
      if (res.status != null) {
        if (res.status == "Token is Expired") {
          errorToken();
        }
      }

      if (res.success) {
        const validation = Array.from(
          document.querySelectorAll(".validation-server")
        );
        validation[0].innerHTML = "";
        validation[1].innerHTML = "";
        Toast.fire({
          icon: "success",
          title: "Update Toko Sukses",
        });
        dashboardToko(id_toko, true);
      }
    },
    error: (err) => {
      $("#btn-submit-toko").attr("disabled", false);
      const error = err.responseJSON;

      Toast.fire({
        icon: "error",
        title: "Update Toko Error",
      });
      if (error.message == "Provided token is expired.") {
        errorToken();
      } else {
        const keys = Object.keys(error);
        const validation = Array.from(
          document.querySelectorAll(".validation-server")
        );
        keys.map((key) => {
          const value = eval("error." + key);
          if (key == "background") {
            validation[0].innerHTML = value[0];
          } else if (key == "logo") {
            validation[1].innerHTML = value[0];
          } else {
            validation[0].innerHTML = "";
            validation[1].innerHTML = "";
          }
        });
      }
    },
  });
}

function handleDeleteProduk() {
  document.body.addEventListener("click", function (e) {
    if (e.target.getAttribute("id") == "btn-delete-produk") {
      e.preventDefault();
      delete_produk(e.target.dataset.idproduk);
    } else if (e.target.getAttribute("id") == "btn-delete-produk-row") {
      e.preventDefault();
      delete_produk(e.target.dataset.idproduk);
    }
  });
}

function delete_produk(id_produk) {
  $.ajax({
    url: BASE_URL_SERVER + "/produk/delete?id_produk=" + id_produk,
    type: "DELETE",
    dataType: "json",
    headers: {
      Accept: "application/json",
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      Authorization: "Bearer " + token,
    },
    cache: false,
    contentType: false,
    processData: false,
    success: (res) => {
      $(".blankLoad").hide();
      document.body.style.overflowY = "auto";
      if (res.status != null) {
        errorToken();
      }

      if (res.success) {
        Toast.fire({
          icon: "success",
          title: "Sukses Hapus Produk",
        });
        showTokoProduk(store.store_data.id_toko, true);
      }
    },
    error: (res) => {
      $(".blankLoad").hide();
      document.body.style.overflowY = "auto";
      Toast.fire({
        icon: "error",
        title: "Error Hapus Produk",
      });
      errorToken();
    },
  });
}

function getHistoryToko(id_toko) {
  $.ajax({
    url: `${BASE_URL_SERVER}/checkout/toko/${id_toko}`,
    type: "GET",
    dataType: "JSON",
    error: function (err) {
      let handler = /* html */ `
        <div class="col-12 my-5">
            <div class="row justify-content-center">
                <img src="${BASE_URL_FILE}/img/character/INTIP.png" alt="" class="user-select-none" style="width: 500px">
                <h2 class="text-center">No history yet</h2>
            </div>
        </div>
        `;

      $("#historyToko").html(handler);
    },
    success: function (result) {
      if (result.success) {
        let handler = ``;
        result.data.map((res, i) => {
          handler += handlerTokoCheckout(res, i + 1);
        });
        $("#history-store").html(handler);
      }
    },
  });
}

function handlerTokoCheckout(data, number) {
  let handler = /* html */ `
      <tr>
        <td class="product_remove">
            ${number}
        </td>
        <td class="product_thumb"><a href="${BASE_URL}/detail/${data.id_produk}"><img
                    src="${BASE_URL_FILE}/uploads/produk/${data.gambar}"
                    alt=""></a></td>
        <td class="product_name"><a href="${BASE_URL}/detail/${data.id_produk}">
          ${data.nama_produk}
        </a></td>
        <td class="product-price">${formatter.toRupiah(data.harga)}</td>
        <td class="product_stock">${
          data.status == 1 ? "Paid Off" : "Not Paid"
        }</td>
      </tr>
  `;

  return handler;
}
