// alert("ok");
$(function () {
  if ($("#registerAccount").length > 0) {
    $("#registerAccount").on("submit", function (e) {
      if (!validateRegister()) {
        e.preventDefault();
        const height = document.querySelector(".card-login").offsetHeight;
        document.querySelector(".rightCard").style.height = `${height}px`;
      }
    });

    $.ajax({
      url: "https://restcountries.eu/rest/v2/all",
      type: "GET",
      method: "GET",
      success: function (responses) {
        // console.log(responses);
        let handler = "";
        responses.map((response) => {
          const name = response.name;
          const code = response.alpha3Code;
          handler += /* html */ `
            <option value=" ${name} (${code}) ">
          `;
        });

        document.getElementById("dataCountry").innerHTML = handler;
      },
    });
  } else if ($("#form-login").length > 0) {
    $("#form-login").on("submit", function (e) {
      e.preventDefault();
      if (validateLogin()) {
        let form = new FormData();
        form.append("email", $("#email").val());
        form.append("password", $("#password").val());
        $.ajax({
          url: "http://localhost:8080/login",
          data: form,
          method: "POST",
          dataType: "json",
          cache: false,
          contentType: false,
          processData: false,
          success: function (response, status, xhr) {
            $("#error_something").html("");
            if (response.success) {
              localStorage.setItem(
                "auth_session",
                JSON.stringify(response.data)
              );
              localStorage.setItem("token", response.token);
              document.location.href = "/";
            }
          },
          error: function (xhr, status) {
            const data = xhr.responseJSON;
            $("#error_something").html(data.message);
          },
        });
      }
    });
  } else if ($("#form-seller").length > 0) {
    $("#form-seller").on("submit", function (e) {
      if (!validateSeller()) {
        e.preventDefault();
      }
    });
  }
});

function validateLogin() {
  const validates = Array.from(document.querySelectorAll(".validate"));
  let turn = true;
  validates.map((validate, i) => {
    const parent = validate.parentNode;
    const input = parent.childNodes[1].childNodes[3];
    let cek = [];
    if (i == 1) {
      cek = justRequiredAndMin(input, 6);
    } else {
      cek = justRequired(input);
    }
    if (cek[0]) {
      input.classList.add("is-valid");
      input.classList.remove("is-invalid");
      validate.innerHTML = "";
    } else {
      turn = false;
      input.classList.remove("is-valid");
      input.classList.add("is-invalid");
      validate.innerHTML = cek[1];
    }
  });

  return turn;
}

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

function validateSeller() {
  const validates = Array.from(document.querySelectorAll(".validate"));
  let turn = true;
  validates.map((validate, i) => {
    const parent = validate.parentNode;
    const input = parent.childNodes[3];
    if (i == 0) {
      const cek = justRequiredAndMin(input, 6);
      if (cek[0]) {
        input.classList.add("is-valid");
        input.classList.remove("is-invalid");
        validate.innerHTML = "";
      } else {
        turn = false;
        input.classList.remove("is-valid");
        input.classList.add("is-invalid");
        validate.innerHTML = cek[1];
      }
    } else {
      const cek2 = justRequired(input);
      if (cek2[0]) {
        input.classList.add("is-valid");
        input.classList.remove("is-invalid");
        validate.innerHTML = "";
      } else {
        turn = false;
        input.classList.remove("is-valid");
        input.classList.add("is-invalid");
        validate.innerHTML = cek2[1];
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

function justRequiredAndMin(input, min) {
  let turn = [true, "sukses"];
  if (input.value == "") {
    turn = [false, "Harus diisi"];
  } else if (input.value.length < min) {
    turn = [false, `Minimal ${min} karakter`];
  }

  return turn;
}
