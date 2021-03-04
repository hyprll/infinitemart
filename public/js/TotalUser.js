$.ajax({
  url: `${BASE_URL_SERVER}/allbuyer`,
  type: "GET",
  dataType: "JSON",
  success: function (result) {
    const getTotalProduk = result.data;
    let number = 1;

    getTotalProduk.map((value) => {
      const BodyTable = document.querySelector("#TableOrder tbody");

      $(BodyTable).append(`<tr>
                              <td>${number++}</td>
                              <td>${value.first_name} ${value.last_name}</td>
                              <td>${value.username}</td>
                              <td>${value.email}</td>
                              <td>${value.address}, ${value.city}</td>
                              <td>${value.postal_code}</td>
                              <td>${value.country_code}</td>
                              <td>${value.phone}</td>
                          </tr>`);
    });
    $(document).ready(function () {
      $("#TableOrder").DataTable({
        paging: true,
        lengthChange: false,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
      });
    });
  },
  error: (err) => {
    $("#TableOrder").DataTable({
      paging: true,
      lengthChange: false,
      searching: true,
      ordering: true,
      info: true,
      autoWidth: false,
      responsive: true,
    });
  },
});

function intDelete(Data) {
  Swal.fire({
    title: "Are you sure?",
    text: "Do you want to delete this data!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      setTimeout(function () {
        //   $.ajax({
        //       url: "http://127.0.0.1:8000/Api/DeleteUser.php",
        //       type: "POST",
        //       dataType: "JSON",
        //       data: {
        //           id: Data,
        //       },
        //       error: function () {
        //           Swal.fire({
        //               icon: "error",
        //               title: "Oops...",
        //               text: "Something went wrong!",
        //               footer:
        //                   "<a href>Please report if there is a problem?</a>",
        //           });
        //       },
        //       success: function () {
        //           Swal.fire(
        //               "Deleted!",
        //               "Your data has been deleted.",
        //               "success"
        //           );
        //           setTimeout(function () {
        //               window.location.reload();
        //           }, 250);
        //       },
        //   });
      }, 100);
    }
  });
}

function intUpdate(data) {
  document.location.href = `/updateUser/${data}`;
}

function setUpdateUser(Data) {
  const NameValue = document.querySelector("#nameUser");
  const EmailValue = document.querySelector("#emailUser");
  const PasswordValue = document.querySelector("#passwordUser");
  const StatusValue = document.querySelector("#statusUser");
  const BtnProfile = document.querySelector(".clickBtnProfile");

  Swal.fire({
    title: "Are you sure?",
    text: "Make sure the changed data is correct!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, Update it!",
  }).then((result) => {
    if (result.isConfirmed) {
      //   $.ajax({
      //       url: "http://127.0.0.1:8000/Api/UpdateUser.php",
      //       type: "POST",
      //       dataType: "JSON",
      //       data: {
      //           Id: Data,
      //           Name: $(NameValue).val(),
      //           Email: $(EmailValue).val(),
      //           Password: $(PasswordValue).val(),
      //           Status: $(StatusValue).val(),
      //           BtnProfile: $(BtnProfile).text(),
      //       },
      //       error: function (result) {
      //           Swal.fire({
      //               icon: "error",
      //               title: "Oops...",
      //               text: "Something went wrong!",
      //               footer: "<a href>Report This Problem?</a>",
      //           });
      //       },
      //       success: function (result) {
      //           const NameAdmin = result.BtnProfile;
      //           Swal.fire(
      //               "Updated!",
      //               `${NameAdmin}, Your file has been Updated.`,
      //               "success"
      //           );
      //           setTimeout(function () {
      //               window.location.reload();
      //           }, 250);
      //       },
      //   });
    }
  });
}
