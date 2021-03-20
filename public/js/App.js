const BASE_URL_SERVER = "http://127.0.0.1:8000/api";
const BASE_URL = "http://127.0.0.1:8000";
const BASE_URL_FILE = "http://127.0.0.1:8000"

// * function logout
function logout(err) {
  const error = err.responseJSON;

  if (error.message == "Provided token is expired.") {
    localStorage.removeItem("token");
    localStorage.removeItem("auth_session");
    document.location.href = BASE_URL + "/login";
  }
}
