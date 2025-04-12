// este código es para el menú de la página principal
const toggleButton = document.getElementById("menu-toggle");
const nav = document.getElementById("header-nav");

toggleButton.addEventListener("click", () => {
  nav.classList.toggle("active");
});
