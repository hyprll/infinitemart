const btnProfile = document.querySelector(".btnUpdate-Profile");

if (btnProfile != null) {
  btnProfile.addEventListener("click", function () {
    const AuthConfirmPassword = document.querySelector(".AuthConfirmPassword");
    const AuthPassword = document.querySelector(".AuthPassword");
    const AuthUser = document.querySelector(".AuthUser");
    const AuthContact = document.querySelector(".AuthContact");

    // User Information

    const Email = document.getElementById("email");
    const Name = document.getElementById("name");
    const Password = document.getElementById("password");
    const ConfirmPassword = document.getElementById("confirmPassword");

    // Contact Information

    const Address = document.getElementById("address");
    const City = document.getElementById("city");
    const Country = document.getElementById("country");
    const PostalCode = document.getElementById("postalCode");

    Swal.fire({
      title: "Do you want to update your profile now?",
      text: "Your profile will be changed immediately if you accept it!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, update it!",
    }).then((result) => {
      if (result.isConfirmed) {
        if (Email.value == "" || Name.value == "") {
          AuthUser.style.display = "block";
          AuthUser.innerHTML = "User Information Must Not Be Empty";

          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Your Contact Or User information must not be empty!",
          });

          if (
            Address.value == "" ||
            City.value == "" ||
            Country.value == "" ||
            PostalCode.value == ""
          ) {
            AuthContact.style.display = "block";
            AuthContact.innerHTML = "Contact information must not be empty";

            Swal.fire({
              icon: "error",
              title: "Oops...",
              text: "Your Contact Or User information must not be empty!",
            });
          }
        } else if (
          Address.value == "" ||
          City.value == "" ||
          Country.value == "" ||
          PostalCode.value == ""
        ) {
          AuthContact.style.display = "block";
          AuthContact.innerHTML = "Contact Information Must Not Be Empty";

          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Your Contact Or User information must not be empty!",
          });
        } else if (Password.value.length > 0 && Password.value.length < 7) {
          AuthPassword.style.display = "block";
          AuthPassword.innerHTML = "Your Password Must Be More Than 8 Words";
        } else if (Password.value != ConfirmPassword.value) {
          AuthConfirmPassword.style.display = "block";
          AuthConfirmPassword.innerHTML = "Your Password Is Not The Same";

          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Your password is not the same!",
          });
        } else {
          // $.ajax({
          //     url : "http://127.0.0.1:8000/Api/ProfileAdmin.php",
          //     type : "POST",
          //     dataType: "JSON",
          //     data : {
          //         'Email' : $(Email).val(),
          //         'Name' : $(Name).val(),
          //         'Password' : $(Password).val(),
          //         'Address' : $(Address).val(),
          //         'City' : $(City).val(),
          //         'Country' : $(Country).val(),
          //         'PostalCode' : $(PostalCode).val()
          //     },
          //     error : function(){
          //     },
          //     success : function(result){
          //         let Name = result.Name
          //         Swal.fire({
          //             icon: 'success',
          //             title: 'Success',
          //             text: `${Name}, Your profile data has been successfully updated!`
          //           })
          //     }
          // })
        }
      }
    });
  });
}

const btnEdit = document.querySelector(".btnEdit");
const cardEdit = document.querySelector(".cardInfoEdit");

btnEdit.addEventListener("click", function () {
  if (cardEdit.style.transform == "translateY(-25%)") {
    cardEdit.style.transform = "translateY(0%)";
    cardEdit.style.opacity = "0";

    setTimeout(function () {
      cardEdit.style.display = "none";
    }, 100);
  } else {
    cardEdit.style.display = "block";
    setTimeout(function () {
      cardEdit.style.transform = "translateY(-25%)";
      cardEdit.style.opacity = "1";
    }, 100);
  }
});

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
        Swal.fire(
          'Success!',
          'Update Profile Sukses.',
          'success'
        )
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
          <button class="btn-outline-success btn" id="btn-update-profile" onclick="updateProfile()">Update Profile</button>
        </div>
      </div>
  `;

  $("#biodata").html(handler);
}

showProfile();