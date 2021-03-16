// alert("ok");
let country = [];

$(function () {
  // * Javasript for section register
  if ($("#registerAccount").length > 0) {
    $("#registerAccount").on("submit", function (e) {
      e.preventDefault();
      if (!validateRegister()) {
        const height = document.querySelector(".card-login").offsetHeight;
        document.querySelector(".rightCard").style.height = `${height}px`;
      } else {
        let split1 = $("#country_code").val().split("(");
        let split2 = split1[1].split(")");
        let finalSplit = split2[0];

        let form = new FormData();
        form.append("email", $("#email").val());
        form.append("username", $("#username").val());
        form.append("city", $("#kota").val());
        form.append("password", $("#password").val());
        form.append("first_name", $("#firstName").val());
        form.append("last_name", $("#lastName").val());
        form.append("phone", $("#phone").val());
        form.append("postal_code", $("#postal_code").val());
        form.append("country_code", finalSplit);
        form.append("address", $("#address").val());
        form.append("role", "2");

        $(".blankLoad").show();
        $(".blankLoad").css("display", "flex");
        document.body.style.overflowY = "hidden";

        $.ajax({
          url: BASE_URL_SERVER + "/register",
          data: form,
          method: "POST",
          headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          },
          dataType: "json",
          cache: false,
          contentType: false,
          processData: false,
          success: function (response, status, xhr) {
            $(".blankLoad").hide();
            console.log(response);
            Swal.fire({
              title: "<strong>Register Successful</strong>",
              icon: "success",
              html: "Register Successful, " + '<a href="/login">Login Now</a> ',
              showCloseButton: false,
              showCancelButton: false,
              allowOutsideClick: false,
              focusConfirm: true,
              confirmButtonText:
                '<a href="/login" style="color:inherit;text-decoration:none"><i class="fa fa-thumbs-up"></i> Login Now!</a>',
              confirmButtonAriaLabel: "Thumbs up, great!",
              cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
              cancelButtonAriaLabel: "Thumbs down",
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = BASE_URL + "/login";
              }
            });
          },
          error: function (xhr, status) {
            $(".blankLoad").hide();
            document.body.style.overflowY = "auto";
            const data = xhr.responseJSON.errors;
            if (data != undefined) {
              const keys = Object.keys(data);
              const validation = Array.from(
                document.querySelectorAll(".validate")
              );
              keys.map((key) => {
                const value = eval("data." + key);
                if (key == "username") {
                  validation[1].innerHTML = value[0];
                } else if (key == "email") {
                  validation[0].innerHTML = value[0];
                } else if (key == "first_name") {
                  validation[2].innerHTML = value[0];
                } else if (key == "last_name") {
                  validation[3].innerHTML = value[0];
                } else if (key == "phone") {
                  validation[4].innerHTML = value[0];
                } else if (key == "address") {
                  validation[9].innerHTML = value[0];
                } else if (key == "city") {
                  validation[6].innerHTML = value[0];
                } else if (key == "postal_code") {
                  validation[5].innerHTML = value[0];
                } else if (key == "password") {
                  validation[8].innerHTML = value[0];
                } else if (key == "country_code") {
                  validation[7].innerHTML = value[0];
                }
              });
            }
          },
        });
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
          const countryVal = `${name} (${code})`;
          handler += /* html */ `
            <option value="${countryVal}">
          `;
          country = [...country, countryVal.toLowerCase()];
        });

        document.getElementById("dataCountry").innerHTML = handler;
      },
    });
  }
  // * Javascript for section login
  else if ($("#form-login").length > 0) {
    $("#form-login").on("submit", function (e) {
      e.preventDefault();
      if (validateLogin()) {
        let form = new FormData();
        form.append("email", $("#email").val());
        form.append("password", $("#password").val());
        $.ajax({
          url: BASE_URL_SERVER + "/login",
          headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          },
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
              localStorage.setItem("token", response.token.original.token);
              if (response.data.role == 1) {
                document.location.href = "/dashboard";
              } else {
                document.location.href = "/";
              }
            }
          },
          error: function (xhr, status) {
            const data = xhr.responseJSON;
            if (data.error == "invalid_credentials") {
              Toast.fire({
                icon: "error",
                title: "Username atau password salah",
              });
              $("#error_something").html("Username atau password salah");
            } else {
              $("#error_something").html(data.error);
              Toast.fire({
                icon: "error",
                title: data.error,
              });
            }
          },
        });
      }
    });
  }
  // * Javascript for section seller
  else if ($("#form-seller").length > 0) {
    // cek toko
    cekToko(auth.id_user);

    $("#form-seller").on("submit", function (e) {
      e.preventDefault();
      if (validateSeller()) {
        let logo = document.getElementById("logoToko").files[0];
        let bg = document.getElementById("bgToko").files[0];

        let form = new FormData();
        form.append("logo", logo);
        form.append("background", bg);
        form.append("nama_toko", $("#nama_toko").val());
        form.append("deskripsi", $("#deskripsiToko").val());
        form.append("id_user", auth.id_user);

        $(".blankLoad").show();
        $(".blankLoad").css("display", "flex");
        document.body.style.overflowY = "hidden";
        // * send request
        $.ajax({
          url: BASE_URL_SERVER + "/toko/add",
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
            document.location.href = "/toko/" + res.data.id_toko;
          },
          error: (err) => {
            $(".blankLoad").hide();
            const error = err.responseJSON;
            logout(err);
            if (error != null) {
              const keys = Object.keys(error);
              const validation = Array.from(
                document.querySelectorAll(".validation-server")
              );
              keys.map((key) => {
                const value = eval("error." + key);
                if (key == "logo") {
                  validation[0].innerHTML = value[0];
                } else if (key == "background") {
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

const countryValidate = (input) => {
  let turn = [true, "sukses"];

  if (input.value == "") {
    turn = [false, "harus diisi"];
  }

  if (input.value != "") {
    const value = input.value.toLowerCase().split(" ");
    let handlerValue = "";
    if (value[0] == "") {
      value.map((v, i) => {
        if (i != 0) {
          if (i == 1) {
            handlerValue += v + " ";
          } else if (i == value.length - 1) {
            handlerValue += v;
          } else {
            handlerValue += v + " ";
          }
        }
      });
    } else {
      value.map((v, i) => {
        if (i == 0) {
          handlerValue += v + " ";
        } else if (i == value.length - 1) {
          handlerValue += v;
        } else {
          handlerValue += v + " ";
        }
      });
    }

    const cek = country.indexOf(handlerValue);

    if (cek == -1) {
      turn = [false, "Kode negara tidak valid"];
    }
  }

  return turn;
};

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
    } else if (i == 7) {
      const cek2 = countryValidate(input);
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

function cekToko(id_user) {
  $.ajax({
    url: BASE_URL_SERVER + "/cektoko/" + id_user + "?id_user=" + id_user,
    type: "GET",
    success: (res) => {
      if (res.success) {
        if (res.message == "Data found.") {
          document.location.href = BASE_URL + "/toko/" + res.data[0].id_toko;
        }
      }
    },
    error: (err) => {
      console.log(err);
    },
  });
}
