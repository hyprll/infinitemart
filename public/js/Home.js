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
          ${auth.email}
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
  if (auth == null) {
    document.location.href = "/login";
  }
  getPermittedUser(auth, token);

  $("#btn-upload-produk").on("click", function (e) {
    const validation = Array.from(document.querySelectorAll(".validation"));
    let sukses = false;
    validation.map((v, i) => {
      let input = "";

      if (i == 0 || i == 1) {
        input = v.parentNode.childNodes[3];
      } else if (i == 2) {
        input = v.parentNode.childNodes[3];
      } else {
        input = v.parentNode.childNodes[3].childNodes[3];
      }

      e.preventDefault();
      if (input.value == "") {
        input.classList.add("is-invalid");
        v.innerHTML = "Harus diisi";
      } else {
        input.classList.add("is-valid");
        v.innerHTML = "";
        sukses = true;
      }
    });

    if (sukses) {
      uploadProduk();
    }
  });

  let izinUser = "";
  document.body.addEventListener("change", function (e) {
    if (e.target.classList.contains("checkIzinUser")) {
      if (e.target.checked) {
        izinUser += e.target.value + ",";
      } else {
        const array = izinUser.split(",");
        const index = array.indexOf(e.target.value);
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
    } else if (e.target.getAttribute("id") == "other_img") {
      const input = document.getElementById("other_img");
      const imgPreview = document.querySelector("#other_img_preview");

      const file = new FileReader();
      file.readAsDataURL(input.files[0]);

      file.onload = function (e) {
        imgPreview.src = e.target.result;
      };
    } else if (e.target.getAttribute("id") == "main_img") {
      const input = document.getElementById("main_img");
      const imgPreview = document.querySelector("#main_img_preview");

      const file = new FileReader();
      file.readAsDataURL(input.files[0]);

      file.onload = function (e) {
        imgPreview.src = e.target.result;
      };
    }
  });
}

// * Javascript for section update produk
if ($("#headTambahProdukContent").length > 0) {
  updateTokoDash();

  document.body.addEventListener("click", function (e) {
    if (e.target.getAttribute("id") == "btn-update-produk") {
      e.preventDefault();
      const validation = Array.from(document.querySelectorAll(".validation"));
      let success = true;
      validation.map((v, i) => {
        let input = "";

        if (i == 0) {
          input = v.parentNode.childNodes[3];
        } else {
          input = v.parentNode.childNodes[3].childNodes[3];
        }

        if (input.value == "") {
          success = false;
          input.classList.add("is-invalid");
          v.innerHTML = "Harus diisi";
        } else {
          input.classList.add("is-valid");
          v.innerHTML = "";
        }
      });

      if (success) {
        updateProduk();
      }
    }
  });

  document.body.addEventListener("change", function (e) {
    if (e.target.getAttribute("id") == "main_img") {
      const input = document.getElementById("main_img");
      const imgPreview = document.querySelector("#main_img_preview");

      const file = new FileReader();
      file.readAsDataURL(input.files[0]);

      file.onload = function (e) {
        imgPreview.src = e.target.result;
      };
    } else if (e.target.getAttribute("id") == "other_img") {
      const input = document.getElementById("other_img");
      const imgPreview = document.querySelector("#other_img_preview");

      const file = new FileReader();
      file.readAsDataURL(input.files[0]);

      file.onload = function (e) {
        imgPreview.src = e.target.result;
      };
    } else if (e.target.classList.contains("checkIzinUser2")) {
      let izinUser = document.querySelector("#checkUser").value;
      if (e.target.checked) {
        let array = izinUser.split(",");
        array = [...array, e.target.value];
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
        const index = array.indexOf(e.target.value);
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
    }
  });
}

// * javascript for section detail
if ($("#img-produk").length > 0) {
  const produkId = document.querySelector("#idProduk").dataset.idproduk;
  let idToko = 0;
  let hargaBarang = 0;
  let namaBarang = 0;
  showAllProduk();

  $.ajax({
    url: BASE_URL_SERVER + "/produk/" + produkId,
    type: "GET",
    success: function (res) {
      if (res.success) {
        $("#img-produk").attr(
          "src",
          BASE_URL + `/uploads/produk/${res.data[0].gambar}`
        );
        $("#img-produk-lainnya").attr(
          "src",
          BASE_URL + `/uploads/produk/${res.data[0].gambar_lain}`
        );
        $("#produkName").html(res.data[0].nama_produk);
        $("#produkFare").html(formatter.toRupiah(res.data[0].harga));
        idToko = res.data[0].id_toko;
        hargaBarang = res.data[0].harga;
        namaBarang = res.data[0].nama_produk;

        // * get toko
        fetch(BASE_URL_SERVER + "/toko/" + res.data[0].id_toko)
          .then((res) => res.json())
          .then((res) => {
            if (res.success) {
              $("#logoToko").attr(
                "src",
                BASE_URL + `/uploads/toko/${res.data[0].logo}`
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

  $("#btn-payment").click(function (e) {
    $("#catatan").css("display", "flex");
    $(this).hide();
    $("#btn-payment-ready").show();
    e.preventDefault();
  });

  $("#btn-payment-ready").click(function () {
    if (validatePayment()) {
      if (auth == null) {
        return (document.location.href = BASE_URL + "/login");
      }

      if (idToko != 0 || hargaBarang != 0 || namaBarang != 0) {
        checkout(idToko, hargaBarang, namaBarang);
      } else {
        alert("error");
      }
    }
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

// * javascript function for validate payment
function validatePayment() {
  const validate = Array.from(document.querySelectorAll(".validation-payment"));
  let turn = true;
  validate.map((v, i) => {
    if (i == 0) {
      const value = document.querySelector("#kuantitas").value;
      if (value == "") {
        turn = false;
        v.innerHTML = "harus diisi";
      } else {
        v.innerHTML = "";
      }

      if (value.split("")[0] == 0) {
        turn = false;
        v.innerHTML = "jumlah barang tidak valid";
      } else {
        v.innerHTML = "";
      }
    } else {
      const value = document.querySelector("#catatanInp").value;
      if (value == "") {
        turn = false;
        v.innerHTML = "harus diisi";
      } else {
        v.innerHTML = "";
      }
    }
  });

  return turn;
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
    } else if (e.target.classList.contains("btn-delete-produk")) {
      e.preventDefault();
      const idProduk = e.target.dataset.idproduk;
      Swal.fire({
        title: "Are you sure?",
        text: "You will delete this product permanently!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        if (result.isConfirmed) {
          deleteProduk(idProduk, idToko);
        }
      });
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
          input.classList.add("is-valid");
          v.innerHTML = "";
        }
      });
      if (success) {
        updateToko(idToko);
      }
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
                      <img src=" ${BASE_URL}/uploads/produk/${result.gambar} "
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
                          <a href="edit/${result.id_produk}" class="btn btn-primary w-100">
                          Edit Barang</a>
                      </div>
                      <div class="col-3">
                          <a href="toko/delete" class="btn btn-danger w-100 btn-delete btn-delete-produk" data-idproduk="${result.id_produk}">
                              <i class="fa fa-trash-alt btn-delete-produk" data-idproduk="${result.id_produk}"></i>
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
      if (err != null) {
        const message = err.responseJSON.message;
        let handler = /* html */ `
        <div class="col-12 my-5">
            <div class="row justify-content-center">
                <img src="/img/character/INTIP.png" alt="" class="user-select-none" style="width: 500px">
                <h2 class="text-center">${message}</h2>
            </div>
        </div>
        `;

        $("#produkTokoPlace").html(handler);
      }
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
                      <img src=" ${BASE_URL}/uploads/produk/${result.gambar} "
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
      console.log(e);
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
          BASE_URL + `/uploads/toko/${res.data[0].background}`
        );
        let myToko = false;
        if (auth != null) {
          if (res.data[0].id_user == auth.id_user) {
            myToko = true;
          }
        }

        let deskripsiTokoNya = res.data[0].deskripsi.replace("/n", "</br>");
        showTokoProduk(idToko, myToko);
        let handlerToko = /* html */ `
        <div class="ProfileImgToko d-flex justify-content-center align-items-center">
            <img src="${
              BASE_URL + `/uploads/toko/` + res.data[0].logo
            }" alt="" class="rounded-circle"
            id="logo-img">
        </div>
        <div class="row px-3 no-edit-toko-content">
            <h4 class="no-edit-toko-content" id="namaToko">
            ${res.data[0].nama_toko}</h4>
            <h4 class="no-edit-toko-content" id="namaToko"></h4>
            <span class="no-edit-toko-content">
                ${deskripsiTokoNya}
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

  let logo = document.getElementById("logo").files;
  let bg = document.getElementById("background").files;
  let namaToko = $("#nama_toko").val();

  let form = new FormData();
  if (logo.length > 0) {
    form.append("logo", logo[0]);
  }
  if (bg.length > 0) {
    form.append("background", bg[0]);
  }
  form.append("nama_toko", namaToko);
  form.append("deskripsi", $("#deskripsi").val());
  form.append("id_toko", idToko);
  form.append("id_user", auth.id_user);
  form.append("logo_old", $("#old_logo").val());
  form.append("bg_old", $("#old_bg").val());

  $(".blankLoad").show();
  $(".blankLoad").css("display", "flex");
  document.body.style.overflowY = "hidden";

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
      const error = err.responseJSON;
      $(".blankLoad").hide();
      document.body.style.overflowY = "auto";
      Toast.fire({
        icon: "error",
        title: "Update Toko Error",
      });
      if (error.message == "Provided token is expired.") {
        localStorage.removeItem("token");
        localStorage.removeItem("auth_session");
        document.location.href = "/login";
      }
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

// * function for search result produk
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
                      <img src=" ${BASE_URL}/uploads/produk/${result.gambar} "
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

// * function for delete produk
function deleteProduk(id_produk, id_toko) {
  const auth = JSON.parse(localStorage.getItem("auth_session"));
  const token = localStorage.getItem("token");

  $(".blankLoad").show();
  $(".blankLoad").css("display", "flex");
  document.body.style.overflowY = "hidden";

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
      console.log(res);
      $(".blankLoad").hide();
      document.body.style.overflowY = "auto";
      Toast.fire({
        icon: "success",
        title: "Sukses Hapus Produk",
      });
      showTokoProduk(id_toko, true);
    },
    error: (res) => {
      console.log(res);
      $(".blankLoad").hide();
      document.body.style.overflowY = "auto";
      Toast.fire({
        icon: "error",
        title: "Error Hapus Produk",
      });
      logout(err);
    },
  });
}

// * Function for get permitted user
function getPermittedUser(auth) {
  // * cek toko
  $.ajax({
    url: BASE_URL_SERVER + "/toko",
    type: "GET",
    success: (res) => {
      if (res.success) {
        let idToko = 0;
        let status = false;
        res.data.map((result) => {
          if (result.id_user == auth.id_user) {
            idToko = result.id_toko;
            status = true;
          }
        });
        if (status) {
          $("#id_toko").val(idToko);
        } else {
          document.location.href = "/";
        }
      }
    },
    error: (err) => {
      console.log(err);
      document.location.href = "/";
      const error = err.responseJSON;
    },
  });

  $.ajax({
    url: BASE_URL_SERVER + "/allbuyer",
    type: "GET",
    success: (res) => {
      if (res.success) {
        let handler = "";
        handler += /*html*/ `
          <input type="hidden" name="checkUser" id="checkUser" class="form-control">
        `;
        res.data.map((result, i) => {
          handler += /*html */ `
            <div class="col-6">
                <div class="form-check">
                    <input class="form-check-input checkIzinUser" name="izinUser${
                      i + 1
                    }}"
                        type="checkbox" value="${result.id_user}" id="izinUser${
            i + 1
          }}">
                    <label class="form-check-label" for="izinUser${i + 1}}">
                        ${result.username}
                    </label>
                </div>
            </div>
            `;
        });

        $("#permitted_user").html(handler);
      }
    },
    error: (err) => {
      console.log(err);
    },
  });
}

// * function for upload produk
function uploadProduk() {
  let main_img = document.getElementById("main_img").files[0];
  let other_img = document.getElementById("other_img").files[0];

  let checkuser = $("#checkUser").val();
  let user_permitted = "";
  let split1 = checkuser.split(",");
  split1.map((s, i) => {
    if (i != split1.length - 1) {
      if (i == split1.length - 2) {
        user_permitted += s;
      } else {
        user_permitted += s + ",";
      }
    }
  });

  let form = new FormData();
  form.append("gambar", main_img);
  form.append("gambar_lain", other_img);
  form.append("nama_produk", $("#NamaProduk").val());
  form.append("harga", $("#hargaProduk").val());
  form.append("user_beli", user_permitted);
  form.append("id_toko", $("#id_toko").val());

  $(".blankLoad").show();
  $(".blankLoad").css("display", "flex");
  document.body.style.overflowY = "hidden";
  // * send request
  $.ajax({
    url: BASE_URL_SERVER + "/produk/add",
    data: form,
    method: "POST",
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
      Swal.fire({
        title: "<strong>Add Product Successful</strong>",
        icon: "success",
        html:
          "Success Add Product, " +
          '<a href="/toko/' +
          $("#id_toko").val() +
          ">See Product now</a> ",
        showCloseButton: false,
        showCancelButton: false,
        allowOutsideClick: false,
        focusConfirm: true,
        confirmButtonText:
          '<a href="/toko/' +
          $("#id_toko").val() +
          '" style="color:inherit;text-decoration:none">See Product Now</a>',
        confirmButtonAriaLabel: "Thumbs up, great!",
        cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
        cancelButtonAriaLabel: "Thumbs down",
      });
    },
    error: (err) => {
      $(".blankLoad").hide();
      document.body.style.overflowY = "auto";
      console.log(err);
      Toast.fire({
        icon: "error",
        title: "Error Upload Produk",
      });
      logout(err);
    },
  });
}

// * function for update toko
function updateTokoDash() {
  // * cek toko
  $.ajax({
    url: BASE_URL_SERVER + "/toko",
    type: "GET",
    success: (res) => {
      if (res.success) {
        let idToko = 0;
        let status = false;
        res.data.map((result) => {
          if (result.id_user == auth.id_user) {
            idToko = result.id_toko;
            status = true;
          }
        });
        if (status) {
          $("#id_toko").val(idToko);
        } else {
          document.location.href = "/";
        }
      }
    },
    error: (err) => {
      console.log(err);
      document.location.href = "/";
    },
  });

  if (auth == null) {
    document.location.href = BASE_URL + "/login";
  }

  const id_produk = $("#id_produk").val();
  $.ajax({
    url: BASE_URL_SERVER + "/produk/" + id_produk,
    method: "GET",
    success: (res) => {
      if (res.success) {
        let handler = /* html */ `
          <div class="cardTambahProduk">
            <div class="headerTambahProduk mt-3">
                <h5>Tambah Produk</h5>
            </div>
            <div class="contentTambahProduk">
                <p class="mt-3">Upload Gambar Produk</p>
                <div class="imgFlex">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="cardImgFlex d-flex justify-content-center align-items-center">
                                <img src=" ${BASE_URL}/uploads/produk/${res.data[0].gambar}"
                                    class="img-fluid user-select-none" id="main_img_preview" style="width: 50%">
                            </div>
                            <div class="footerCardImg mt-2 text-center">
                                <label for="main_img" class="text-center" style="cursor: pointer">Gambar Utama</label>
                                <input type="file" name="main_img" class="d-none" id="main_img"
                                    accept="image/jpg,image/png,image/jpeg"><br>
                                <small class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cardImgFlex d-flex justify-content-center align-items-center">
                                <img src=" ${BASE_URL}/uploads/produk/${res.data[0].gambar_lain}"
                                    class="img-fluid user-select-none" id="other_img_preview" style="width: 50%">
                            </div>
                            <div class="footerCardImg mt-2 text-center">
                                <label for="other_img" class="text-center" style="cursor: pointer">Gambar
                                    Lainnya</label>
                                <input type="file" name="other_img" class="d-none" id="other_img"
                                    accept="image/jpg,image/png,image/jpeg"><br>
                                <small class="text-danger"></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          `;
        $("#headTambahProdukContent").html(handler);
        let handler2 = /*html */ `
        <div class="cardDetailProduk mt-4">
            <div class="headerDetailProduk mt-3">
                <h5>Detail Produk</h5>
                <input type="hidden" class="form-control" name="img_main_old" placeholder="Nama Produk" id="img_main_old" value="${res.data[0].gambar}">
                <input type="hidden" class="form-control" name="img_other_old" placeholder="Nama Produk" id="img_other_old" value="${res.data[0].gambar_lain}">
            </div>
            <div class="contentDetailProduk">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="inputValue d-flex flex-column mt-3">
                                    <label for="" class="mb-2">Nama Produk</label>
                                    <input type="text" class="form-control" id="NamaProduk" name="NamaProduk" placeholder="Nama Produk"
                                        value="${res.data[0].nama_produk}">
                                    <small class="validation text-danger"></small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="inputValue d-flex flex-column mt-3">
                                    <label for="" class="mb-2">Harga Produk</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                        <input type="text" class="form-control" placeholder="Harga Produk" id="hargaProduk"
                                            name="hargaProduk" aria-label="Username" aria-describedby="basic-addon1"
                                            onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                            value="${res.data[0].harga}">
                                    </div>
                                    <small class="validation text-danger"></small>
                                </div>
                            </div>
                        </div>
                    </div>`;

        get_user_permitted_update(res.data[0].user_beli, handler2);
      }
    },
    error: (res) => {
      alert("error");
      console.log(res);
      logout(res);
    },
  });
}

// * function for show update produk content
function get_user_permitted_update(user_permitted, before) {
  const user_izin = user_permitted.split(",");
  $.ajax({
    url: BASE_URL_SERVER + "/allbuyer",
    type: "GET",
    success: (res) => {
      if (res.success) {
        let handler = /*html*/ `
            <div class="col-md-6">
            <div class="inputValue d-flex flex-column mt-3">
            <label for="" class="mb-2">User Di Izinkan</label>
            <div class="row">
            <input type="hidden" name="checkUser" id="checkUser" class="form-control"
            value="${user_permitted}">`;

        res.data.map((result, i) => {
          handler += /*html */ `
          <div class="col-6">
              <div class="form-check">
                  <input class="form-check-input checkIzinUser2" name="izinUser${i}"
                      type="checkbox" value="${
                        result.id_user
                      }" id="izinUser${i}" 
                      ${
                        user_izin.indexOf(result.id_user.toString()) != -1
                          ? "checked"
                          : ""
                      }>
                  <label class="form-check-label" for="izinUser${i}">
                      ${result.username}
                  </label>
              </div>
          </div>
          `;
        });

        handler += /* html */ `<small class="text-danger"></small></div></div></div><div class="col-md-12"><div class="d-flex mt-3"><button type="submit" class="btn btn-primary" style="width: 15vw;" id="btn-update-produk">Update Produk</button></div></div></div></div></div>`;

        let handlerAll = before + handler;

        $("#contentTambahProduk").html(handlerAll);
      }
    },
    error: (err) => {
      alert("error");
      console.log(err);
    },
  });
}

// * function for update produk
function updateProduk() {
  let main_img = document.getElementById("main_img").files;
  let other_img = document.getElementById("other_img").files;

  let checkuser = $("#checkUser").val();

  let form = new FormData();
  if (main_img.length > 0) {
    form.append("gambar", main_img[0]);
  }

  if (other_img.length > 0) {
    form.append("gambar_lain", other_img[0]);
  }

  form.append("gambar_old", $("#img_main_old").val());
  form.append("gambar_lain_old", $("#img_other_old").val());
  form.append("nama_produk", $("#NamaProduk").val());
  form.append("harga", $("#hargaProduk").val());
  form.append("user_beli", checkuser);
  form.append("id_toko", $("#id_toko").val());
  form.append("id_produk", $("#id_produk").val());

  $(".blankLoad").show();
  $(".blankLoad").css("display", "flex");
  document.body.style.overflowY = "hidden";
  // * send request
  $.ajax({
    url: BASE_URL_SERVER + "/produk/update",
    data: form,
    method: "POST",
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
      Swal.fire({
        title: "<strong>Update Product Successful</strong>",
        icon: "success",
        html:
          "Success Update Product, " +
          '<a href="/toko/' +
          $("#id_toko").val() +
          ">See Product now</a> ",
        showCloseButton: false,
        showCancelButton: false,
        allowOutsideClick: false,
        focusConfirm: true,
        confirmButtonText:
          '<a href="/toko/' +
          $("#id_toko").val() +
          '" style="color:inherit;text-decoration:none">See Product Now</a>',
        confirmButtonAriaLabel: "Thumbs up, great!",
        cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
        cancelButtonAriaLabel: "Thumbs down",
      });
    },
    error: (err) => {
      $(".blankLoad").hide();
      document.body.style.overflowY = "auto";
      console.log(err);
      Toast.fire({
        icon: "error",
        title: "Error Update Produk",
      });
      logout(err);
    },
  });
}

// * function for checkout
function checkout(idToko, harga, nama_barang) {
  $(".blankLoad").show();
  $(".blankLoad").css("display", "flex");
  document.body.style.overflowY = "hidden";
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
  form.append("deskripsi", $("#catatanInp").val());
  form.append("total_barang", $("#kuantitas").val());
  form.append("harga", harga);
  form.append("status", 0);
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
      Toast.fire({
        icon: "success",
        title: "Sukses Memesan Produk, selesaikan pembayaran",
      });
      let strWindowFeatures =
        "location=yes,height=650,width=520,scrollbars=yes,status=yes";
      let URL = res.redirect_url;
      window.open(URL, "_blank", strWindowFeatures);
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
      console.log(error);
    },
  });
}
