$(document).ready(function () {
  $("#ruta").on("submit", function (e) {
    e.preventDefault(); // Evita que el formulario se envíe de manera convencional

    var form_data = new FormData(this);

    $.ajax({
      type: "POST",
      url: "registrar_ruta", // Ajusta la URL según el nombre correcto de tu archivo PHP
      contentType: false,
      processData: false,
      data: form_data,
      success: function (response) {
        if (response.status === "success") {
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
