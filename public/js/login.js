$(document).ready(function () {
  $("#login").on("submit", function (e) {
    e.preventDefault(); // Evita que el formulario se envíe de manera convencional

    const formData = $(this).serialize(); // Serializa los datos del formulario

    $.ajax({
      url: "login", // Ruta al archivo PHP
      type: "POST",
      dataType: "json", // Asegúrate de procesar como JSON
      data: formData,
      success: function (response) {
        if (response.status === "success") {
          // Redirigir a la URL proporcionada
          window.location.href = response.redirect;
        } else {
          // Mostrar mensaje de error
          $("#responseMessage")
            .text(response.message)
            .addClass("error")
            .removeClass("success");
        }
      },
      error: function () {
        $("#responseMessage")
          .text("Error al enviar el formulario.")
          .addClass("error")
          .removeClass("success");
      },
    });
  });
  $("#register").on("submit", function (e) {
    e.preventDefault(); // Evita que el formulario se envíe de manera convencional

    const formData = $(this).serialize(); // Serializa los datos del formulario

    $.ajax({
      url: "register", // Ruta al archivo PHP
      type: "POST",
      dataType: "json", // Asegúrate de procesar como JSON
      data: formData,
      success: function (response) {
        if (response.status === "success") {
          // Redirigir a la URL proporcionada
          window.location.href = response.redirect;
        } else {
          // Mostrar mensaje de error
          $("#responseMessage")
            .text(response.message)
            .addClass("error")
            .removeClass("success");
        }
      },
      error: function () {
        $("#responseMessage")
          .text("Error al enviar el formulario.")
          .addClass("error")
          .removeClass("success");
      },
    });
  });
});

function logout() {
  $.ajax({
    url: "logout", // Ruta al archivo PHP que maneja la sesión
    type: "POST",
    dataType: "json",
    success: function (response) {
      if (response.status === "success") {
        // Redirigir a la URL proporcionada
        window.location.href = response.redirect;
      } else {
        // Mostrar mensaje de error
        $("#responseMessage")
          .text(response.message)
          .addClass("error")
          .removeClass("success");
      }
    },
    error: function () {
      $("#responseMessage")
        .text("Error al enviar el formulario.")
        .addClass("error")
        .removeClass("success");
    },
  });
}
