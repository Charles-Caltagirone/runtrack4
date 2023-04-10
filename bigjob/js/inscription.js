// pour l'inscription
let login = document.querySelector("#login");
let email = document.querySelector("#email");
let password = document.querySelector("#password");
let cpassword = document.querySelector("#cpassword");
// let terms = document.getElementById("terms").checked;
let terms = document.querySelector("#terms");
let submitInscription = document.querySelector("#submitInscription");
let message = document.querySelector("#message");

function inscription() {
  if (login.value == "") {
    document.getElementById("message").innerText = "Veuillez rentrer un login";
    return false;
  } else if (email.value == "") {
    document.getElementById("message").innerText = "Veuillez rentrer un email";
    return false;
  } else if (!email.value.endsWith("@laplateforme.io")) {
    document.getElementById("message").innerText = "Nom de domaine non reconnu";
    return false;
  } else if (password.value == "") {
    document.getElementById("message").innerText = "Veuillez rentrer un mdp";
    return false;
  } else if (cpassword.value == "") {
    document.getElementById("message").innerText = "Veuillez rentrer une confirmation de mdp";
    return false;
  } else if (password.value !== cpassword.value) {
    document.getElementById("message").innerText = "Les mdp ne correspondent pas";
    return false;
  } else if ($("#terms").prop("checked", null)) {
    document.getElementById("message").innerText = "Acceptez les termes";
    return false;
  } else {
    return true;
  }
}

submitInscription.addEventListener("submit", (e) => {
  if (inscription() == false) {
    e.preventDefault();
  }
});
// fin inscription

