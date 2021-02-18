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

function startCaraosel() {
  const cards = Array.from(document.querySelectorAll(".carausel-img"));
  const cardNow = cards[cek];

  const dot = Array.from(document.querySelectorAll(".slider"));
  const dotNow = dot[cek];

  cek == dataHeader.length - 1 ? (cek = 0) : (cek += 1);
  const cardNext = cards[cek];
  const dotNext = dot[cek];

  dotNow.classList.remove("active");
  dotNext.classList.add("active");

  cardNow.style.marginLeft = `-100%`;
  cardNow.style.opacity = "0";
  cardNext.style.opacity = "1";
  cardNext.style.marginLeft = `0`;

  setTimeout(() => {
    cardNow.style.position = "absolute";
    cardNow.style.marginLeft = "100%";
  }, 500);
}

const harga = Array.from(document.querySelectorAll(".stuff-fare"));
const formatter = new FormatMoney();

if (harga.length > 0) {
  harga.map((h) => {
    h.innerHTML = formatter.toRupiah(h.dataset.fare);
  });
}
