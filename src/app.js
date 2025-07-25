// Libraries
window.bootstrap = require("bootstrap/dist/js/bootstrap.bundle.js");

// Local Scripts
import "../src/form-ajax";
import "../src/api-sepomex";
import "../src/smooth-scrolling";
import "../src/aos";
import "../src/swipers";

// Header
document.addEventListener("DOMContentLoaded", function () {
  // Cache the DOM element containing the navbar
  var header = document.getElementById("navbar");

  function updateScroll() {
    var scroll = window.pageYOffset || document.documentElement.scrollTop;

    if (scroll >= 1) {
      header.classList.add("navbar-scroll");
    } else {
      header.classList.remove("navbar-scroll");
    }
  }

  window.addEventListener("scroll", updateScroll);
  updateScroll();
});

// Function that closes menu
function cerrarMenu() {
  var menu = document.querySelector(".menu");
  var navbar = document.getElementById("navbar");
  var backdrop = document.getElementById("backdrop");

  if (menu) {
    menu.classList.remove("menu-abierto");
  }
  if (navbar) {
    navbar.classList.remove("opacity-0");
  }
  if (backdrop) {
    backdrop.classList.remove("backdrop-opacity-1");
  }
}

// Navigation menu
document.getElementById("mburger").addEventListener("click", function (e) {
  e.stopPropagation();
  var menu = document.querySelector(".menu");
  var navbar = document.getElementById("navbar");
  var backdrop = document.getElementById("backdrop");

  menu.classList.toggle("menu-abierto");
  navbar.classList.toggle("opacity-0");
  backdrop.classList.toggle("backdrop-opacity-1");
});

document.querySelector(".menu").addEventListener("click", function (e) {
  e.stopPropagation();
});

document.body.addEventListener("click", function (e) {
  var menu = document.querySelector(".menu");
  var navbar = document.getElementById("navbar");
  var backdrop = document.getElementById("backdrop");

  menu.classList.remove("menu-abierto");
  navbar.classList.remove("opacity-0");
  backdrop.classList.remove("backdrop-opacity-1");
});

const btnCerrarMenu = document.getElementById("cerrar-menu");

if (btnCerrarMenu) {
  btnCerrarMenu.addEventListener("click", cerrarMenu, false);
}

const btnLogo = document.getElementById("cerrar-menu");

if (btnLogo) {
  btnLogo.addEventListener("click", cerrarMenu, false);
}

// Get the ul element by its ID
var ulElement = document.getElementById("navmenu");

// Get all li elements within the ul element
var liElements = ulElement.getElementsByTagName("li");

// Loop through each li element
for (var i = 0; i < liElements.length; i++) {
  // Do stuff with each li element
  var currentLi = liElements[i];
  currentLi.addEventListener("click", function () {
    var menu = document.querySelector(".menu");
    var navbar = document.getElementById("navbar");
    var backdrop = document.getElementById("backdrop");

    menu.classList.remove("menu-abierto");
    navbar.classList.remove("opacity-0");
    backdrop.classList.remove("backdrop-opacity-1");
  });
}

const btnContacto = document.getElementById("btn-contacto");

if (btnContacto) {
  btnContacto.addEventListener("click", cerrarMenu, false);
}

// Cerrar menú con Esc
document.addEventListener("keydown", (event) => {
  if (event.key === "Escape") {
    cerrarMenu();
  }
});

// Mostrar/ocultar campos opcionales del formulario
document.addEventListener("DOMContentLoaded", function () {
  const radioSi = document.getElementById("negocio_si");
  const radioNo = document.getElementById("negocio_no");
  const camposNegocio = document.getElementById("campos-negocio");
  const nombreNegocio = document.getElementById("nombre-negocio");
  const giroNegocio = document.getElementById("giro-negocio");

  function toggleCamposNegocio() {
    if (radioSi.checked) {
      camposNegocio.style.display = "block";
      nombreNegocio.required = true;
      giroNegocio.required = true;
    } else {
      camposNegocio.style.display = "none";
      nombreNegocio.required = false;
      giroNegocio.required = false;
    }
  }

  radioSi.addEventListener("change", toggleCamposNegocio);
  radioNo.addEventListener("change", toggleCamposNegocio);
});
