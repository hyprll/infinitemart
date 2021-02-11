// alert("ok");
$(function () {
  if ($("#registerAccount")) {
    $("#registerAccount").on("submit", function (e) {
      if (!validateRegister()) {
        e.preventDefault();
        const height = document.querySelector(".card-login").offsetHeight;
        document.querySelector(".rightCard").style.height = `${height}px`;
      }
    });
  }
});

function validateRegister() {
  const validates = Array.from(document.querySelectorAll(".validate"));
  let turn = true;

  validates.map((validate, i) => {
    const parent = validate.parentNode;
    const input =
      i != 4
        ? parent.childNodes[1].childNodes[3]
        : parent.childNodes[1].childNodes[3].childNodes[3].childNodes[1];

    if (i == 0) {
      const cek1 = validateEmail(input);
      if (cek1[0]) {
        input.classList.add("is-valid");
        input.classList.remove("is-invalid");
        validate.innerHTML = "";
      } else {
        turn = false;
        input.classList.add("is-invalid");
        input.classList.remove("is-valid");
        validate.innerHTML = cek1[1];
      }
    } else if (i == 1) {
      const cek2 = validateUsername(input);
      if (cek2[0]) {
        input.classList.add("is-valid");
        input.classList.remove("is-invalid");
        validate.innerHTML = "";
      } else {
        turn = false;
        input.classList.add("is-invalid");
        input.classList.remove("is-valid");
        validate.innerHTML = cek2[1];
      }
    } else {
      const cek3 = justRequired(input);
      if (cek3[0]) {
        input.classList.add("is-valid");
        input.classList.remove("is-invalid");
        validate.innerHTML = "";
      } else {
        turn = false;
        input.classList.add("is-invalid");
        input.classList.remove("is-valid");
        validate.innerHTML = cek3[1];
      }
    }
  });
  return turn;
}

function validateEmail(input) {
  let turn = [false, "harus diisi"];
  if (input.value != "") {
    turn = [true, "Sukses"];
  } else if (
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(
      input.value
    )
  ) {
    turn = [false, "email tidak valid"];
  }

  return turn;
}

function validateUsername(input) {
  let turn = [true, "sukses"];
  if (input.value == "") {
    turn = [false, "Harus diisi"];
  } else if (!/^[a-zA-Z]+[a-zA-Z0-9-]*$/.test(input.value)) {
    turn = [false, "username tidak boleh ada spasi"];
  }

  return turn;
}

function justRequired(input) {
  let turn = [true, "sukses"];
  if (input.value == "") {
    turn = [false, "Harus diisi"];
  }

  return turn;
}
