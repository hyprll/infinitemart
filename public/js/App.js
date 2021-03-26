const BASE_URL_SERVER = "http://127.0.0.1:8000/api";
const BASE_URL = "http://127.0.0.1:8000";
const BASE_URL_FILE = "http://127.0.0.1:8000";

// * function logout
function logout(err) {
  const error = err.responseJSON;

  if (error.message == "Provided token is expired.") {
    errorToken();
  }
}

function errorToken() {
  $("#modalQuickview").modal("hide");
  localStorage.removeItem("token");
  localStorage.removeItem("auth_session");
  localStorage.removeItem("store");
  Swal.fire(
    "Expired Token",
    "Your token is expired please login again",
    "error"
  ).then((res) => {
    if (res.isConfirmed) {
      window.location.href = BASE_URL + "/login";
    }
  });
  setTimeout(() => {
    window.location.href = BASE_URL + "/login";
  }, 5000);
}

function notLoginYet() {
  $("#modalQuickview").modal("hide");
  Swal.fire(
    "Not Login",
    "You Not Login Now, please login before checkout",
    "error"
  ).then((res) => {
    if (res.isConfirmed) {
      window.location.href = BASE_URL + "/login";
    }
  });
  setTimeout(() => {
    window.location.href = BASE_URL + "/login";
  }, 5000);
}
