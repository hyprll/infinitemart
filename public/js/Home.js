if ($(".headerCarousel2")) {
  $(".headerCarousel2").owlCarousel({
    center: false,
    margin: 0,
    loop: true,
    autoWidth: true,
    items: 3,
    autoplay: true,
    autoplayTimeout: 5000,
  });
}

if ($("#btn-upload-produk")) {
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

if ($("#btn-update-produk")) {
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

const harga = Array.from(document.querySelectorAll(".stuff-fare"));
const formatter = new FormatMoney();

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

if ($("#btn-edit-toko") !== null) {
  $("#btn-edit-toko").on("click", function () {
    $(".no-edit-toko-content").hide();
    $(".edit-toko-content").show();
  });
  $("#btn-cancel-toko").on("click", function () {
    $(".no-edit-toko-content").show();
    $(".edit-toko-content").hide();
  });

  $("#logo").on("change", function () {
    const input = document.getElementById("logo");
    const imgPreview = document.querySelector("#logo-img");

    const file = new FileReader();
    file.readAsDataURL(input.files[0]);

    file.onload = function (e) {
      imgPreview.src = e.target.result;
    };
  });

  $("#background").on("change", function () {
    const input = document.getElementById("background");
    const imgPreview = document.querySelector("#background-img");

    const file = new FileReader();
    file.readAsDataURL(input.files[0]);

    file.onload = function (e) {
      imgPreview.src = e.target.result;
    };
  });

  $("#form-update-toko").on("submit", function (e) {
    const validation = Array.from(document.querySelectorAll(".validation"));
    validation.map((v, i) => {
      let input = v.parentNode.childNodes[3];
      
      if (input.value == "") {
        e.preventDefault();
        input.classList.add("is-invalid");
        v.innerHTML = "Harus diisi";
      } else if (input.value.length < 6) {
        e.preventDefault();
        input.classList.add("is-invalid");
        v.innerHTML = "Minimal 6 karakter";
      } else {
        input.classList.add("is-valid");
        v.innerHTML = "";
      }
    });
  });
}
