const harga = Array.from(document.querySelectorAll(".stuff-fare"));
const formatter = new FormatMoney();
let allUser = "";

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

  showProfile();

  document.body.addEventListener("click", function (e) {
    if (e.target.getAttribute("id") == "logoutBtn") {
      localStorage.removeItem("token");
      localStorage.removeItem("auth_session");
      document.location.href = "/login";
    } else if (e.target.getAttribute("id") == "btn-update-profile") {
      updateProfile();
    }
  });
}

// * javascript for section history
if ($("#history").length > 0) {
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

  $("#history").html(loadingHistory());
  $.ajax({
    url: BASE_URL_SERVER + "/checkout/user/" + auth.id_user,
    type: "GET",
    success: function (res) {
      if (res.success) {
        showHistory(res.data);
      }
    },
    error: (err) => {
      console.log(err);
      $("#history").html(errorHistory("Data Not found"));
    },
  });

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
      margin: 10,
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
  $(".blankLoad").css("display", "flex");
  document.body.style.overflowY = "hidden";
  getPermittedUser(auth, token);

  $("input[type=radio][name=user_permitted]").change(function () {
    if (this.value == 1) {
      $("#user_permit").val(allUser);
      $(".section-search-user").hide();
    } else if (this.value == 2) {
      $("#user_permit").val("");
      $(".section-search-user").css("display", "flex");
    }
  });

  $("#btn-search-user").click(function () {
    let handler = handlerList($("#searchUser").val());
    $("#searchUser").val("");
    $("#listUsers").append(handler);
  });

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

  document.body.addEventListener("click", function (e) {
    if (e.target.classList.contains("btn-delete-user")) {
      const list = e.target.parentNode.parentNode.parentNode;
      list.remove();
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
  $(".blankLoad").css("display", "flex");
  document.body.style.overflowY = "hidden";
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

  $("input[type=radio][name=user_permitted]").change(function () {
    if (this.value == 1) {
      $("#user_permit").val(allUser);
      $(".section-search-user").hide();
    } else if (this.value == 2) {
      $("#user_permit").val("");
      $(".section-search-user").css("display", "flex");
    }
  });

  $("#btn-search-user").click(function () {
    let handler = handlerList($("#searchUser").val());
    $("#searchUser").val("");
    $("#listUsers").append(handler);
  });

  document.body.addEventListener("click", function (e) {
    if (e.target.classList.contains("btn-delete-user")) {
      const list = e.target.parentNode.parentNode.parentNode;
      list.remove();
    }
  });
}

// * javascript for section detail
if ($("#img-produk").length > 0) {
  const produkId = document.querySelector("#idProduk").dataset.idproduk;
  let idToko = 0;
  let hargaBarang = 0;
  let namaBarang = 0;
  let userBeli = "";
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
        userBeli = res.data[0].user_beli;

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

      if (
        idToko != 0 ||
        hargaBarang != 0 ||
        namaBarang != 0 ||
        userBeli != ""
      ) {
        checkout(idToko, hargaBarang, namaBarang, userBeli);
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

// * function for handlerList
function handlerList(email) {
  let handler = /* html */ `
  <li class="list-group-item">
    <div class="row justify-content-between">
        <div class="col d-flex align-items-center">
            <span>${email}</span>
        </div>
        <div class="col d-flex align-items-center justify-content-end">
            <button class="btn btn-danger btn-delete-user" type="button">
                hapus
            </button>
        </div>
    </div>
  </li>
  `;

  return handler;
}

// * function for update profile
function updateProfile() {
  let form = new FormData();
  form.append("username", $("#username").val());
  form.append("email", auth.email);
  form.append("first_name", $("#first-name").val());
  form.append("last_name", $("#last-name").val());
  form.append("phone", $("#phone").val());
  form.append("id_user", auth.id_user);
  form.append("country_code", auth.country_code);
  form.append("postal_code", $("#postal_code").val());
  form.append("address", $("#alamat").val());
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
      const error = err.responseJSON;
      if (error != null) {
        const keys = Object.keys(error);
        const validation = Array.from(
          document.querySelectorAll(".validation-server-profile")
        );
        keys.map((key) => {
          const value = eval("error." + key);
          if (key == "first_name") {
            $("#first-name").addClass("is-invalid");
            validation[1].innerHTML = value[0];
          } else if (key == "last_name") {
            $("#last-name").addClass("is-invalid");
            validation[2].innerHTML = value[0];
          } else if (key == "postal_code") {
            $("#postal_code").addClass("is-invalid");
            validation[3].innerHTML = value[0];
          } else if (key == "username") {
            $("#username").addClass("is-invalid");
            validation[0].innerHTML = value[0];
          } else if (key == "phone") {
            $("#phone").addClass("is-invalid");
            validation[4].innerHTML = value[0];
          } else if (key == "address") {
            $("#alamat").addClass("is-invalid");
            validation[5].innerHTML = value[0];
          } else {
            $("#alamat").removeClass("is-invalid");
            $("#phone").removeClass("is-invalid");
            $("#postal_code").removeClass("is-invalid");
            $("#username").removeClass("is-invalid");
            $("#last-name").removeClass("is-invalid");
            $("#first-name").removeClass("is-invalid");
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

// * function for showProfil
function showProfile() {
  $("#user-profil-name").html(`${auth.username}`);
  let handler = /* html */ `
      <div class="row px-3 mb-3" style="width:550px">
        <div class="col-md-4">
          <span class="fw-bold">Username</span>
        </div>
        <div class="col-md-8">
          <input type="text" id="username" class="form-control" value="${auth.username}"/>
          <small class="validation-server-profile text-danger"></small>
        </div>
      </div>
      <div class="row px-3 mb-3" style="width:550px">
        <div class="col-md-4">
          <span class="fw-bold">Nama Depan</span>
        </div>
        <div class="col-md-8">
          <input type="text" id="first-name" class="form-control" value="${auth.first_name}"/>
          <small class="validation-server-profile text-danger"></small>
        </div>
      </div>
      <div class="row px-3 mb-3" style="width:550px">
        <div class="col-md-4">
          <span class="fw-bold">Nama Belakang</span>
        </div>
        <div class="col-md-8">
          <input type="text" id="last-name" class="form-control" value="${auth.last_name}"/>
          <small class="validation-server-profile text-danger"></small>
        </div>
      </div>
      <div class="row px-3 mb-3" style="width:550px">
        <div class="col-md-4">
          <span class="fw-bold">Postal Code</span>
        </div>
        <div class="col-md-8">
          <input type="text" id="postal_code" class="form-control" value="${auth.postal_code}"/>
          <small class="validation-server-profile text-danger"></small>
        </div>
      </div>
      <div class="row px-3 mb-3" style="width:550px">
        <div class="col-md-4">
          <span class="fw-bold">No. Telepon</span>
        </div>
        <div class="col-md-8">
          <div class="input-group">
            <span class="input-group-text" id="basic-addon1">+62</span>
            <input type="text" id="phone" class="form-control" value="${auth.phone}">
          </div>
          <small class="validation-server-profile text-danger"></small>
        </div>
      </div>

      <div class="row px-3 mb-3" style="width:550px">
        <div class="col-md-4">
          <span class="fw-bold">Alamat</span>
        </div>
        <div class="col-md-8">
          <textarea id="alamat" class="form-control">${auth.address}</textarea>
          <small class="validation-server-profile text-danger"></small>
        </div>
      </div>

      <div class="row px-3 justify-content-end" style="width:550px">
        <div class="col-md-8">
          <button class="btn-outline-success btn" id="btn-update-profile">Update Profile</button>
        </div>
      </div>
  `;

  $("#biodata").html(handler);
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

  let history = false;
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
    } else if (e.target.getAttribute("id") == "btn-history-toko") {
      history = !history;
      if (history) {
        e.target.innerHTML = "Barang di toko";
        $("#produkTokoPlace").hide();
        $("#historyToko").css("display", "flex");
        $(".header-toko-text").html("History Toko");
      } else {
        e.target.innerHTML = "History Toko";
        $("#historyToko").hide();
        $("#produkTokoPlace").css("display", "flex");
        $(".header-toko-text").html("Barang Di Toko");
      }
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

        let deskripsiTokoNya = nl2br(res.data[0].deskripsi);
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
                        <small class="text-danger validation-server"></small>
                    </div>
                    <div class="row px-3 mb-3">
                        <label for="">Ubah Background</label>
                        <input class="form-control" type="file" id="background" name="background">
                        <small class="text-danger validation-server"></small>
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
            <div class="col-md-3 mb-3">
                <button class="btn w-100 btn-warning" id="btn-history-toko">History Toko</button>
            </div>
            <div class="col-md-3">
                <a href="/toko/add" class="btn w-100 btn-success">Tambah produk</a>
            </div>
          </div>
          `;

          // * get history toko
          getHistoryToko(res.data[0].id_toko);
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
      if (res.status != null) {
        if (res.status == "Token is Expired") {
          localStorage.removeItem("token");
          localStorage.removeItem("auth_session");
          document.location.href = "/login";
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
        showTokoDash(idToko);
      }
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
      $(".blankLoad").hide();
      document.body.style.overflowY = "auto";
      if (res.status != null) {
        if (res.status == "Token is Expired") {
          localStorage.removeItem("token");
          localStorage.removeItem("auth_session");
          document.location.href = "/login";
        }
      }

      if (res.success) {
        Toast.fire({
          icon: "success",
          title: "Sukses Hapus Produk",
        });
        showTokoProduk(id_toko, true);
      }
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
    url: BASE_URL_SERVER + "/cektoko/" + auth.id_user,
    type: "GET",
    success: (res) => {
      if (!res.success) {
        window.location.href = "/";
      } else {
        $("#id_toko").val(res.data[0].id_toko);
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
        let val = "";
        res.data.map((result, i) => {
          if (i == 0) {
            val += result.id_user;
          } else {
            val += "," + result.id_user;
          }
        });

        $("#user_permit").val(val);
        allUser = val;
        $(".blankLoad").css("display", "none");
        document.body.style.overflowY = "auto";
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

  let form = new FormData();
  form.append("gambar", main_img);
  form.append("gambar_lain", other_img);
  form.append("nama_produk", $("#NamaProduk").val());
  form.append("harga", $("#hargaProduk").val());
  form.append("user_beli", $("#user_permit").val());
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
      if (res.status != null) {
        if (res.status == "Token is Expired") {
          localStorage.removeItem("token");
          localStorage.removeItem("auth_session");
          document.location.href = "/login";
        }
      }

      if (res.success) {
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
      }
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
      const error = err.responseJSON;
      if (error != null) {
        const keys = Object.keys(error);
        const validation = Array.from(document.querySelectorAll(".validation"));
        const validation_other = document.querySelector(".validation-other");
        keys.map((key) => {
          const value = eval("error." + key);
          if (key == "gambar") {
            validation[0].innerHTML = value[0];
          } else if (key == "gambar_lain") {
            validation[1].innerHTML = value[0];
          } else if (key == "nama_produk") {
            validation[2].innerHTML = value[0];
          } else if (key == "harga") {
            validation[3].innerHTML = value[0];
          } else if (key == "user_beli") {
            validation_other.innerHTML = value[0];
          } else {
            validation[0].innerHTML = "";
            validation[1].innerHTML = "";
            validation_other.innerHTML = "";
          }
        });
      }
    },
  });
}

// * function for update toko
function updateTokoDash() {
  // * cek toko
  $.ajax({
    url: BASE_URL_SERVER + "/cektoko/" + auth.id_user,
    type: "GET",
    success: (res) => {
      if (!res.success) {
        window.location.href = "/";
      } else {
        getProduk(res.data[0].id_toko);
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

  function getProduk(my_toko) {
    const id_produk = $("#id_produk").val();
    $.ajax({
      url: BASE_URL_SERVER + "/produk/" + id_produk,
      method: "GET",
      success: (res) => {
        if (res.success) {
          if (res.data[0].id_toko != my_toko) {
            window.location.href = BASE_URL + "/toko/" + my_toko;
          }
          $(".blankLoad").css("display", "none");
          document.body.style.overflowY = "auto";

          $("#main_img_preview").attr(
            "src",
            `${BASE_URL}/uploads/produk/${res.data[0].gambar}`
          );
          $("#other_img_preview").attr(
            "src",
            `${BASE_URL}/uploads/produk/${res.data[0].gambar_lain}`
          );

          $("#img_main_old").val(res.data[0].gambar);
          $("#img_other_old").val(res.data[0].gambar_lain);
          $("#NamaProduk").val(res.data[0].nama_produk);
          $("#hargaProduk").val(res.data[0].harga);

          // get_user_permitted_update(res.data[0].user_beli, handler2);
        } else {
          window.location.href = BASE_URL + "/toko/" + my_toko;
        }
      },
      error: (res) => {
        logout(res);

        if (res.responseJSON != null) {
          if (!res.responseJSON.success) {
            window.location.href = BASE_URL + "/toko/" + my_toko;
          }
        }
      },
    });
  }
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
            <small class="text-danger validation-other"></small>
            ${handlerPermitted()}
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

        // $("#contentTambahProduk").html(handlerAll);
      }
    },
    error: (err) => {
      alert("error");
      console.log(err);
    },
  });

  function handlerPermitted() {
    let handler = /* html */ `
        <div class="row">
          <div class="col-md-6">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="user_permitted"
                      id="user_permitted1" checked value="1">
                  <label class="form-check-label" for="user_permitted1">
                      Semua User
                  </label>
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="user_permitted"
                      id="user_permitted2" value="2">
                  <label class="form-check-label" for="user_permitted2">
                      Pilih User
                  </label>
              </div>
          </div>
      </div>
      <small class="text-danger validation-other"></small>
      <div class="row mt-3 section-search-user">
          <div class="col-12">
              <div class="input-group mb-3">
                  <input type="email" class="form-control" placeholder="Cari user dengan email"
                      aria-describedby="btn-search-user" id="searchUser">
                  <button class="btn btn-primary" type="button" id="btn-search-user"
                      style="min-width: 40px">
                      <i class="fa fa-search"></i>
                  </button>
              </div>
          </div>
          <div class="col-12 overflow-auto" style="max-height: 200px">
              <span>List Users</span>
              <ul class="list-group mt-2" id="listUsers">

              </ul>
          </div>
      </div>
    `;

    return handler;
  }
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
      if (res.status != null) {
        if (res.status == "Token is Expired") {
          localStorage.removeItem("token");
          localStorage.removeItem("auth_session");
          document.location.href = "/login";
        }
      }

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
      Toast.fire({
        icon: "error",
        title: "Error Update Produk",
      });
      logout(err);
      const error = err.responseJSON;
      if (error != null) {
        const keys = Object.keys(error);
        const validation = Array.from(
          document.querySelectorAll(".validation-update")
        );
        const validation_other = document.querySelector(".validation-other");
        keys.map((key) => {
          const value = eval("error." + key);
          if (key == "gambar") {
            validation[0].innerHTML = value[0];
          } else if (key == "gambar_lain") {
            validation[1].innerHTML = value[0];
          } else if (key == "nama_produk") {
            validation[2].innerHTML = value[0];
          } else if (key == "harga") {
            validation[3].innerHTML = value[0];
          } else if (key == "user_beli") {
            validation_other.innerHTML = value[0];
          } else {
            validation[0].innerHTML = "";
            validation[1].innerHTML = "";
            validation_other.innerHTML = "";
          }
        });
      }
    },
  });
}

// * function for checkout
function checkout(idToko, harga, nama_barang, user_beli) {
  $(".blankLoad").show();
  $(".blankLoad").css("display", "flex");
  document.body.style.overflowY = "hidden";
  // * cek apakah user boleh beli atau tidak

  const id_user = auth.id_user;
  const user_beli_split = user_beli.split(",");
  if (user_beli_split.indexOf(id_user.toString()) == -1) {
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
    form.append("deskripsi", $("#catatanInp").val());
    form.append("total_barang", $("#kuantitas").val());
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
            localStorage.removeItem("token");
            localStorage.removeItem("auth_session");
            document.location.href = "/login";
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
        console.error(err.responseText);
        console.error(error);
      },
    });
  }
}

// * function for show history
function showHistory(data) {
  let dataProduk = [];
  data.map((d) => {
    $.ajax({
      url: BASE_URL_SERVER + "/produk/" + d.id_produk,
      type: "GET",
      success: (res) => {
        dataProduk = [...dataProduk, res.data];
      },
      error: (err) => {
        console.log(err);
      },
    });
  });

  setTimeout(() => {
    if (dataProduk.length > 0) {
      setHistory(data, dataProduk);
    } else {
      setTimeout(() => {
        if (dataProduk.length > 0) {
          setHistory(data, dataProduk);
        } else {
          $("#history").html(
            errorHistory(
              "Unable to connect,</br> check your internet connection"
            )
          );
        }
      }, 5000);
    }
  }, 3000);
}

// * function for show data history
function setHistory(dataHistory, dataProduk) {
  let i = 0;
  let handler = `<div class="container">`;
  dataHistory.map((data) => {
    handler += setHistoryProduk(data, dataProduk[i][0]);
    i++;
  });
  handler += "</div>";
  $("#history").html(handler);
}

function setHistoryProduk(data, produk) {
  let handler = /* html */ `
  <div class="produk p-3 mb-3">
    <div class="row">
        <div class="col-md-3">
            <img src="${BASE_URL}/uploads/produk/${produk.gambar}" alt=""
                class="img-fluid">
        </div>
        <div class="col-md-9">
            <div class="row mt-3">
                <h4 class="h5">${produk.nama_produk}</h4>
            </div>
            <div class="row">
                <div class="col-md-6">
                    Penerima : ${data.first_name} ${data.last_name}
                </div>
                <div class="col-md-6">
                    Kode Pos : ${data.postal_code}
                </div>
                <div class="col-md-6">
                    No Telepon : ${data.phone}
                </div>
                <div class="col-md-6">
                    Total : ${formatter.toRupiah(data.harga)}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    Dikirim ke : ${data.address}
                </div>
            </div>
        </div>
    </div>
  </div>
  `;

  return handler;
}

function loadingHistory() {
  let handler = /* html */ `
  <div class="loadingHistory d-flex justify-content-center align-items-center" style="width: 100%;min-height:450px">
    <img src="${BASE_URL}/img/gif/roll1.gif" alt="" style="width: 100px">
  </div>
  `;

  return handler;
}

function errorHistory(message) {
  let handler = /* html */ `
  <div class="loadingHistory d-flex justify-content-center align-items-center"
  style="width: 100%;min-height:450px">
    <div class="row justify-content-center">
        <img src="${BASE_URL}/img/character/intip.png" alt="" style="width: 450px">
        <h3 class="h2 text-center mt-3">${message}</h3>
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

function getHistoryToko(id_toko) {
  $.ajax({
    url: `${BASE_URL_SERVER}/checkout/toko/${id_toko}`,
    type: "GET",
    dataType: "JSON",
    error: function (err) {
      let handler = /* html */ `
        <div class="col-12 my-5">
            <div class="row justify-content-center">
                <img src="/img/character/INTIP.png" alt="" class="user-select-none" style="width: 500px">
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
        $(".checkoutTable").html(handler);
      }
      $("#tableCheckout").DataTable({
        responsive: true,
        autoWidth: false,
        scrollCollapse: true,
      });
    },
  });
}

function handlerTokoCheckout(data, no) {
  const format = new FormatMoney();
  let handler = /* html */ `
    <tr>
        <td class="text-center">${no}</td>
        <td>${data.first_name} ${data.last_name}</td>
        <td>${data.deskripsi}</td>
        <td>${data.order_id}</td>
        <td>${format.toRupiah(data.harga)} </td>
        <td>+62 ${data.phone}</td>
        <td>${data.tanggal}</td>
    </tr>
    `;
  return handler;
}

// OurTeam

// $(".WrapperOwl").owlCarousel({
//   margin: 10,
//   loop: true,
//   autoWidth: true,
//   items: 4,
//   autoplay: true,
//   URLhashListener: true,
// });
