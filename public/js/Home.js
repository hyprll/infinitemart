const harga = Array.from(document.querySelectorAll(".stuff-fare"));
const formatter = new FormatMoney();

const auth = JSON.parse(localStorage.getItem("auth_session"));
const token = localStorage.getItem("token");
let btnAuth = "";
if (auth == null) {
  btnAuth = `
      <a href="/login"" class="btn btn-login">Login</a>&nbsp;&nbsp;
      <a href="/register" class="btn btn-signup">Sign up</a>
      `;
} else {
  btnAuth = `
      <a href="/profile" class="btn btn-signup">Profile</a>
      `;
}
$("#btn-place").html(btnAuth);
$("#btn-place2").html(btnAuth);
console.log(auth);

// * Javascript for searching
document.addEventListener("submit", function (e) {
  if (e.target.getAttribute("id") == "formSearching") {
    e.preventDefault();
    const keyword = $("#keywordSearch").val();
    searchingNow(keyword);
  }
});

document.body.addEventListener("click", function (e) {
  if (e.target.getAttribute("id") == "btnBackSearch") {
    $(".root").show();
    $("#keywordSearch").val("");
    $("#search_root").html("");
  }
});

// * javascript for Section Profile
if ($("#biodata").length > 0) {
  if (auth == null) {
    document.location.href = "/login";
  }

  $("#user-profil-name").html(`${auth.username}`);

  // * check if user has toko or no
  let hasToko = false;
  let idToko = 0;
  $.ajax({
    url: `${BASE_URL_SERVER}/toko`,
    type: "GET",
    success: function (res) {
      if (res.success) {
        res.data.forEach((response) => {
          if (response.id_user == auth.id_user) {
            hasToko = true;
            idToko = response.id_toko;
          }

          let handlerCardMenu = /* html */ `
            <i class="fas fa-user user-left"></i>
            <a href="/profile" class="profile-card-left" type="button">My Profile</a>
            ${
              hasToko
                ? `<i class="fas fa-store-alt store-left"></i>
            <a href="toko/${idToko}" class="store-card-left" type="button">Toko Saya</a>`
                : `<i class="fas fa-store-alt store-left"></i>
            <a href="/seller" class="store-card-left" type="button">Buat Toko</a>`
            }
            <i class="fas fa-history history-left"></i>
            <a href="/history" class="history-card-left" type="button">History</a>

            <i class="fas fa-sign-in-alt logout-left"></i>
            <label for="label-left" class="logout-card-left" type="button" id="logoutBtn">
                Logout
            </label>
            `;

          $("#card-menu-profile").html(handlerCardMenu);
        });
      }
    },
    error: (err) => {
      alert("Error");
    },
  });

  let handler = /* html */ `
      <h6>Username</h6>
      <label name="username" class="username">
          ${auth.username}
      </label>
      <h3>Nama Depan</h3>
      <label name="username" class="username">
          ${auth.first_name}
      </label>
      <h3>Nama Belakang</h3>
      <label name="username" class="username">
          ${auth.last_name}
      </label>
      <h3>alamat Email</h3>
      <label name="username" class="username">
          ${auth.address}
      </label>
      <h3>No.Telepon</h3>
      <label name="username" class="username">
          +62 ${auth.phone}
      </label>
  `;

  $("#biodata").html(handler);

  document.body.addEventListener("click", function (e) {
    if (e.target.getAttribute("id") == "logoutBtn") {
      localStorage.removeItem("token");
      localStorage.removeItem("auth_session");
      document.location.href = "/login";
    }
  });
}

// * Javascript for section home
if ($(".headerCarousel2").length > 0) {
  $(function () {
    $(".headerCarousel2").owlCarousel({
      center: false,
      margin: 0,
      loop: true,
      autoWidth: true,
      items: 3,
      autoplay: true,
      autoplayTimeout: 5000,
    });

    showAllProduk();
  });
}

// * Javascript for section add produk
if ($("#btn-upload-produk").length > 0) {
  $("#btn-upload-produk").on("click", function (e) {
    const validation = Array.from(document.querySelectorAll(".validation"));
    validation.map((v, i) => {
      let input = "";

      if (i == 0 || i == 1) {
        input = v.parentNode.childNodes[3];
      } else if (i == 2) {
        input = v.parentNode.childNodes[3];
      } else {
        input = v.parentNode.childNodes[3].childNodes[3];
      }

      if (input.value == "") {
        e.preventDefault();
        input.classList.add("is-invalid");
        v.innerHTML = "Harus diisi";
      } else {
        input.classList.add("is-valid");
        v.innerHTML = "";
      }
    });
  });

  $("#main_img").change(function () {
    const input = document.getElementById("main_img");
    const imgPreview = document.querySelector("#main_img_preview");

    const file = new FileReader();
    file.readAsDataURL(input.files[0]);

    file.onload = function (e) {
      imgPreview.src = e.target.result;
    };
  });

  $("#other_img").change(function () {
    const input = document.getElementById("other_img");
    const imgPreview = document.querySelector("#other_img_preview");

    const file = new FileReader();
    file.readAsDataURL(input.files[0]);

    file.onload = function (e) {
      imgPreview.src = e.target.result;
    };
  });

  const checkbox = Array.from(document.querySelectorAll(".checkIzinUser"));
  let izinUser = "";
  checkbox.map((c) => {
    c.addEventListener("change", function () {
      if (c.checked) {
        izinUser += c.value + ",";
      } else {
        const array = izinUser.split(",");
        const index = array.indexOf(c.value);
        if (index > -1) {
          array.splice(index, 1);
        }
        let ganti = "";
        array.map((a, i) => {
          if (i != array.length - 1) {
            ganti += a + ",";
          }
        });
        izinUser = ganti;
      }
      document.querySelector("#checkUser").value = izinUser;
    });
  });
}

// * Javascript for section update produk
if ($("#btn-update-produk").length > 0) {
  $("#btn-update-produk").on("click", function (e) {
    const validation = Array.from(document.querySelectorAll(".validation"));
    validation.map((v, i) => {
      let input = "";

      if (i == 0) {
        input = v.parentNode.childNodes[3];
      } else {
        input = v.parentNode.childNodes[3].childNodes[3];
      }

      if (input.value == "") {
        e.preventDefault();
        input.classList.add("is-invalid");
        v.innerHTML = "Harus diisi";
      } else {
        input.classList.add("is-valid");
        v.innerHTML = "";
      }
    });
  });

  $("#main_img").change(function () {
    const input = document.getElementById("main_img");
    const imgPreview = document.querySelector("#main_img_preview");

    const file = new FileReader();
    file.readAsDataURL(input.files[0]);

    file.onload = function (e) {
      imgPreview.src = e.target.result;
    };
  });

  $("#other_img").change(function () {
    const input = document.getElementById("other_img");
    const imgPreview = document.querySelector("#other_img_preview");

    const file = new FileReader();
    file.readAsDataURL(input.files[0]);

    file.onload = function (e) {
      imgPreview.src = e.target.result;
    };
  });

  const checkbox = Array.from(document.querySelectorAll(".checkIzinUser2"));
  checkbox.map((c) => {
    c.addEventListener("change", function () {
      let izinUser = document.querySelector("#checkUser").value;
      if (c.checked) {
        let array = izinUser.split(",");
        array = [...array, c.value];
        let ganti = "";
        array.map((a, i) => {
          if (a == "") {
            ganti += a;
          } else if (i != array.length - 1) {
            ganti += a + ",";
          } else {
            ganti += a;
          }
        });
        izinUser = ganti;
      } else {
        const array = izinUser.split(",");
        const index = array.indexOf(c.value);
        if (index > -1) {
          array.splice(index, 1);
        }
        let ganti = "";
        array.map((a, i) => {
          if (a == "") {
            ganti += a;
          } else if (i != array.length - 1) {
            ganti += a + ",";
          } else {
            ganti += a;
          }
        });
        izinUser = ganti;
      }
      document.querySelector("#checkUser").value = izinUser;
    });
  });
}

// * javascript for section detail
if ($("#img-produk").length > 0) {
  const produkId = document.querySelector("#idProduk").dataset.idproduk;
  showAllProduk();

  $.ajax({
    url: BASE_URL_SERVER + "/produk/" + produkId,
    type: "GET",
    success: function (res) {
      if (res.success) {
        $("#img-produk").attr(
          "src",
          BASE_URL_SERVER + `/uploads/produk/${res.data[0].gambar}`
        );
        $("#img-produk-lainnya").attr(
          "src",
          BASE_URL_SERVER + `/uploads/produk/${res.data[0].gambar_lain}`
        );
        $("#produkName").html(res.data[0].nama_produk);
        $("#produkFare").html(formatter.toRupiah(res.data[0].harga));

        // * get toko
        fetch(BASE_URL_SERVER + "/toko/" + res.data[0].id_toko)
          .then((res) => res.json())
          .then((res) => {
            if (res.success) {
              $("#logoToko").attr(
                "src",
                BASE_URL_SERVER + `/uploads/toko/${res.data[0].logo}`
              );
              $("#tokoName").attr("href", `/toko/${res.data[0].id_toko}`);
              $("#tokoName").html(res.data[0].nama_toko);
            }
          })
          .catch((err) => alert("error"));
      }
    },
    error: function () {
      alert("error");
    },
  });
}

if (harga.length > 0) {
  harga.map((h) => {
    h.innerHTML = formatter.toRupiah(h.dataset.fare);
  });
}

const btn_delete = Array.from(document.querySelectorAll(".btn-delete"));

if (btn_delete.length != 0) {
  btn_delete.map((bd) => {
    bd.addEventListener("click", function (e) {
      e.preventDefault();
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        if (result.isConfirmed) {
          const form = bd.parentNode.childNodes[3];
          form.submit();
        }
      });
    });
  });
}

// * Javascript for section dashboard toko
if ($("#background-img").length > 0) {
  const idToko = document.querySelector("#idToko").dataset.idtoko;
  showTokoDash(idToko);

  document.body.addEventListener("click", function (e) {
    if (e.target.getAttribute("id") == "btn-edit-toko") {
      $(".no-edit-toko-content").hide();
      $(".edit-toko-content").show();
    } else if (e.target.getAttribute("id") == "btn-cancel-toko") {
      $(".no-edit-toko-content").show();
      $(".edit-toko-content").hide();
    }
  });

  document.body.addEventListener("change", function (e) {
    if (e.target.getAttribute("id") == "logo") {
      const input = document.getElementById("logo");
      const imgPreview = document.querySelector("#logo-img");

      const file = new FileReader();
      file.readAsDataURL(input.files[0]);

      file.onload = function (e) {
        imgPreview.src = e.target.result;
      };
    } else if (e.target.getAttribute("id") == "background") {
      const input = document.getElementById("background");
      const imgPreview = document.querySelector("#background-img");

      const file = new FileReader();
      file.readAsDataURL(input.files[0]);

      file.onload = function (e) {
        imgPreview.src = e.target.result;
      };
    }
  });

  document.body.addEventListener("submit", function (e) {
    if (e.target.getAttribute("id") == "form-update-toko") {
      e.preventDefault();
      const validation = Array.from(document.querySelectorAll(".validation"));
      validation.map((v, i) => {
        let input = v.parentNode.childNodes[3];

        if (input.value == "") {
          input.classList.add("is-invalid");
          v.innerHTML = "Harus diisi";
        } else if (input.value.length < 6) {
          input.classList.add("is-invalid");
          v.innerHTML = "Minimal 6 karakter";
        } else {
          input.classList.add("is-valid");
          v.innerHTML = "";
          updateToko(idToko);
        }
      });
    }
  });
}

// * function for show produk in store
function showTokoProduk(idToko, myStore = false) {
  $.ajax({
    url: BASE_URL_SERVER + `/produk/toko/${idToko}`,
    type: "GET",
    success: function (res) {
      if (res.success) {
        let handler = "";
        res.data.map((result) => {
          handler += /* html */ `
          <div class="col-md-3">
            <div class="sellerCard-Barang mb-4 pb-3">
              <a href="/detail/${
                result.id_produk
              }" style="text-decoration: none;color:inherit;">
                  <div class="topImg-seller d-flex justify-content-center">
                      <img src=" ${BASE_URL_SERVER}/uploads/produk/${
            result.gambar
          } "
                          alt="InfiniteMart ${
                            result.nama_produk
                          }" height="250px" class="user-select-none">
                  </div>
                  <div class="container d-flex justify-content-between">

                      <div class="contentCard-Barang d-flex flex-column mt-2">
                          <h5 class="fw-bold">${result.nama_produk}</h5>
                          <span class="stuff-fare" style="color: gold;">
                            ${formatter.toRupiah(result.harga)}
                          </span>
                          <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                      </div>

                  </div>
              </a>

              ${
                myStore
                  ? `
              <div class="container mb-3">
                  <div class="row g-1">
                      <div class="col-9">
                          <a href="toko/edit/" class="btn btn-primary w-100">
                          Edit Barang</a>
                      </div>
                      <div class="col-3">
                          <a href="toko/delete" class="btn btn-danger w-100 btn-delete">
                              <i class="fa fa-trash-alt"></i>
                          </a>
                      </div>
                  </div>
              </div>`
                  : ``
              }   
          </div>       

        </div>
          `;
        });
        if (document.querySelector("#produkTokoPlace") !== null) {
          document.querySelector("#produkTokoPlace").innerHTML = handler;
        }
      } else {
        if (document.querySelector("#produkTokoPlace") !== null) {
          document.querySelector("#produkTokoPlace").innerHTML = `
            <h3 class="text-center my-5">Tidak Ada Produk Yang Tersedia</h3>
          `;
        }
      }
    },
    error: function (err) {
      alert("error");
    },
  });
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
          handler += /*html*/ `
          <div class="col-md-3">
            <div class="sellerCard-Barang mb-4 pb-3">
              <a href="/detail/${
                result.id_produk
              }" style="text-decoration: none;color:inherit;">
                  <div class="topImg-seller d-flex justify-content-center">
                      <img src=" ${BASE_URL_SERVER}/uploads/produk/${
            result.gambar
          } "
                          alt="InfiniteMart ${
                            result.nama_produk
                          }" height="250px" class="user-select-none">
                  </div>
                  <div class="container d-flex justify-content-between">

                      <div class="contentCard-Barang d-flex flex-column mt-2">
                          <h5 class="fw-bold">${result.nama_produk}</h5>
                          <span class="stuff-fare" style="color: gold;">
                            ${formatter.toRupiah(result.harga)}
                          </span>
                          <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                      </div>

                  </div>
              </a>
          </div>       

        </div>
          `;
        });

        if (document.querySelector("#produkPlace") !== null) {
          document.querySelector("#produkPlace").innerHTML = handler;
        }
      }
    },
    error: function (e) {
      alert("error");
    },
  });
}

// * function for show toko dashboard
function showTokoDash(idToko) {
  const auth = JSON.parse(localStorage.getItem("auth_session"));
  const token = localStorage.getItem("token");

  $.ajax({
    url: BASE_URL_SERVER + `/toko/${idToko}`,
    type: "GET",
    success: function (res) {
      if (res.success) {
        $("#background-img").attr(
          "src",
          BASE_URL_SERVER + `/uploads/toko/${res.data[0].background}`
        );
        let myToko = false;
        if (auth != null) {
          if (res.data[0].id_user == auth.id_user) {
            myToko = true;
          }
        }

        showTokoProduk(idToko, myToko);
        let handlerToko = /* html */ `
        <div class="ProfileImgToko d-flex justify-content-center align-items-center">
            <img src="${
              BASE_URL_SERVER + `/uploads/toko/` + res.data[0].logo
            }" alt="" class="rounded-circle"
            id="logo-img">
        </div>
        <div class="row px-3 no-edit-toko-content">
            <h4 class="no-edit-toko-content" id="namaToko">
            ${res.data[0].nama_toko}</h4>
            <h4 class="no-edit-toko-content" id="namaToko"></h4>
            <span class="no-edit-toko-content">
                ${res.data[0].deskripsi}
            </span>
        </div>        
        `;

        if (myToko) {
          handlerToko += /* html */ `
          <form action="/toko" method="POST" id="form-update-toko" enctype="multipart/form-data">
            <input type="hidden" name="id_toko" value="${res.data[0].id_toko}">
            <input type="hidden" name="old_logo" id="old_logo" value="${res.data[0].logo}">
            <input type="hidden" name="old_bg" id="old_bg" value="${res.data[0].background}">
            <div class="row">
                <div class="col-md-6">
                    <div class="row px-3">
                        <div class="col-md-12">
                            <label for="" class="edit-toko-content">Nama Toko</label>
                            <input type="text" class="form-control edit-toko-content" value="${res.data[0].nama_toko}" id="nama_toko"
                                name="namaToko">
                            <small class="validation text-danger edit-toko-content"></small>
                        </div>
                    </div>
                    <div class="row px-3">
                        <div class="col-md-12">
                            <label for="" class="edit-toko-content mt-3">Deskripsi Toko</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control edit-toko-content"
                                style="min-height: 150px">${res.data[0].deskripsi}</textarea>
                            <small class="validation text-danger edit-toko-content"></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 edit-toko-content">
                    <div class="row px-3 mb-3">
                        <label for="">Ubah Logo</label>
                        <input class="form-control" type="file" id="logo" name="logo">
                    </div>
                    <div class="row px-3 mb-3">
                        <label for="">Ubah Background</label>
                        <input class="form-control" type="file" id="background" name="background">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <button type="submit" class="btn w-100 btn-success" id="btn-update-toko">Update
                                Toko</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn w-100 btn-danger"
                                id="btn-cancel-toko">Batalkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
          `;

          handlerToko += /* html */ `
          <div class="row mt-3 px-3 no-edit-toko-content">
            <div class="col-md-3 mb-3">
                <button class="btn w-100 btn-info" id="btn-edit-toko">Edit Toko</button>
            </div>
            <div class="col-md-3">
                <a href="/toko/add" class="btn w-100 btn-success">Tambah produk</a>
            </div>
          </div>
          `;
        }

        $("#kontent-toko").html(handlerToko);
      }
    },
    error: function (err) {
      alert("error");
    },
  });
}

// * function for updateToko
function updateToko(idToko) {
  const auth = JSON.parse(localStorage.getItem("auth_session"));
  const token = localStorage.getItem("token");

  let logo = document.getElementById("logo").files[0];
  let bg = document.getElementById("background").files[0];

  let form = new FormData();
  form.append("logo", logo);
  form.append("background", bg);
  form.append("nama_toko", $("#nama_toko").val());
  form.append("deskripsi", $("#deskripsi").val());
  form.append("id_toko", idToko);
  form.append("logo_old", $("#old_logo").val());
  form.append("bg_old", $("#old_bg").val());

  $(".blankLoad").show();
  $(".blankLoad").css("display", "flex");
  document.body.style.overflowY = "hidden";

  $.ajax({
    url: BASE_URL_SERVER + "/toko/update",
    data: form,
    method: "POST",
    dataType: "json",
    headers: {
      Accept: "application/json",
      "Content-Type": "multipart/form-data",
      Authorization: "Bearer " + token,
    },
    cache: false,
    contentType: false,
    processData: false,
    success: (res) => {
      $(".blankLoad").hide();
      document.body.style.overflowY = "auto";
      console.log(res);
      Toast.fire({
        icon: "success",
        title: "Update Toko Sukses",
      });
      showTokoDash(idToko);
    },
    error: (err) => {
      console.log(err);
      $(".blankLoad").hide();
      document.body.style.overflowY = "auto";
      Toast.fire({
        icon: "error",
        title: "Update Toko Error",
      });
    },
  });
}

// * function for searching
function searchingNow(keyword) {
  $(".blankLoad").show();
  $(".blankLoad").css("display", "flex");
  document.body.style.overflowY = "hidden";
  $.ajax({
    url: BASE_URL_SERVER + "/findproduk?keyword=" + keyword,
    type: "GET",
    success: function (res) {
      $(".blankLoad").hide();
      document.body.style.overflowY = "auto";
      $(".root").hide();
      let handler = /*html */ `
      <div class="container mt-5">

          <div class="row">
            <p style="font-size:25px">
              <i class="fa fa-arrow-left mr-5" id="btnBackSearch" style="cursor:pointer"></i>
              Hasil Pencarian untuk <strong>"${keyword}"</strong>
            </p>
            <hr>
          </div>
      
          <div class="row">
              ${showSearchProduk(res)}
          </div>
      </div>
      
      `;

      $("#search_root").html(handler);
    },
    error: function (err) {
      let res = err.responseJSON;
      if (res != null) {
        $(".blankLoad").hide();
        document.body.style.overflowY = "auto";
        $(".root").hide();
        let handler = /*html */ `
      <div class="container mt-5">

          <div class="row">
            <p style="font-size:25px">
              <i class="fa fa-arrow-left mr-5" id="btnBackSearch" style="cursor:pointer"></i>
              Hasil Pencarian untuk <strong>"${keyword}"</strong>
            </p>
            <hr>
          </div>
      
          <div class="row">
            <div class="col-12 my-5">
                <div class="row justify-content-center">
                    <img src="/img/character/INTIP.png" alt="" class="user-select-none" style="width: 500px">
                    <h2 class="text-center">${res.message}</h2>
                </div>
            </div>
          </div>
      </div>
      
      `;

        $("#search_root").html(handler);
      }
    },
  });
}

// * function for serach result produk
function showSearchProduk(res) {
  console.log(res);
  let handler = "";
  res.data.map((result) => {
    handler += /*html*/ `
          <div class="col-md-3">
            <div class="sellerCard-Barang mb-4 pb-3">
              <a href="/detail/${
                result.id_produk
              }" style="text-decoration: none;color:inherit;">
                  <div class="topImg-seller d-flex justify-content-center">
                      <img src=" ${BASE_URL_SERVER}/uploads/produk/${
      result.gambar
    } "
                          alt="InfiniteMart ${
                            result.nama_produk
                          }" height="250px" class="user-select-none">
                  </div>
                  <div class="container d-flex justify-content-between">

                      <div class="contentCard-Barang d-flex flex-column mt-2">
                          <h5 class="fw-bold">${result.nama_produk}</h5>
                          <span class="stuff-fare" style="color: gold;">
                            ${formatter.toRupiah(result.harga)}
                          </span>
                          <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                      </div>

                  </div>
              </a>
          </div>       

        </div>
          `;
  });

  return handler;
}
