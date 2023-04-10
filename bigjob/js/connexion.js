// CONNEXION
let submitConnexion = document.querySelector("#submitConnexion");
function connexion() {
  if (login.value == "") {
    document.getElementById("message").innerText = "Veuillez rentrer un login";
    return false;
  } else if (password.value == "") {
    document.getElementById("message").innerText = "Veuillez rentrer un mdp";
    return false;
  } else {
    return true;
  }
}

submitConnexion.addEventListener("submit", (e) => {
  if (connexion() == false) {
    e.preventDefault();
  }
});
console.log("hello");