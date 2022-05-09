let btn_connexion = document.querySelector(".btn-connexion");
let btn_inscription = document.querySelector(".btn-inscription");
let inscription = document.querySelector(".inscription");
let connexion = document.querySelector(".connexion");

btn_connexion.addEventListener("click", () => {
  inscription.style.display = "none";
  connexion.style.display = "block";
});

btn_inscription.addEventListener("click", () => {
  inscription.style.display = "block";
  connexion.style.display = "none";
});
