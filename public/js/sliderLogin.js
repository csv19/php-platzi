document.addEventListener("DOMContentLoaded", function () {
  const buttonRegister = document.getElementById("buttonRegister");
  const registerLogin = document.getElementById("registerLogin");
  const singInLogin = document.getElementById("singInLogin");
  const buttonLogin = document.getElementById("buttonLogin");
  const sliderLogin = document.getElementById("sliderLogin");
  const closeLogin = document.getElementById("closeLogin");

  buttonRegister.addEventListener("click", function () {
    singInLogin.classList.add("hidden");
    registerLogin.classList.remove("hidden");
    registerLogin.classList.add("block");
  });
  // Agrega un evento de click al botón
  buttonLogin.addEventListener("click", function () {
    sliderLogin.classList.remove("hidden");
    sliderLogin.classList.add("block");
  });
  closeLogin.addEventListener("click", function () {
    // Cambia de 'block' a 'hidden'
    singInLogin.classList.remove("hidden");
    singInLogin.classList.add("block");
    registerLogin.classList.remove("block");
    registerLogin.classList.add("hidden");
    sliderLogin.classList.remove("block");
    sliderLogin.classList.add("hidden");
  });
});
