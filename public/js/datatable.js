$(document).ready(function () {
  var table = $("#becas").DataTable({
    processing: true,
    serverSide: true,
    ajax: {
      url: "lista_beca_json",
      type: "GET",
    },
    columns: [
      { data: "id" },
      { data: "nombres" },
      { data: "apellido_paterno" },
      { data: "apellido_materno" },
      { data: "correo" },
      { data: "edad" },
      { data: "razon" },
      {
        data: "documento",
        render: function (data, type, row) {
          return (
            '<a href="../public/src/solicitud_becas/' +
            row.documento +
            '" target="_blank">' +
            row.documento +
            "</a>"
          );
        },
      },
      { data: "fecha_solicitud" },
      { data: "estado" },
    ],
  });
});

$(document).ready(function () {
  var tableUsuario = $("#usuarios").DataTable({
    processing: true,
    serverSide: true,
    ajax: {
      url: "lista_usuario_json",
      type: "GET",
    },
    columns: [
      { data: "id" },
      { data: "nombres" },
      { data: "apellido_paterno" },
      { data: "apellido_materno" },
      { data: "correo" },
      { data: "edad" }
    ],
  });
});
$(document).ready(function () {
  var tablePlan = $("#planes").DataTable({
    processing: true,
    serverSide: true,
    ajax: {
      url: "lista_plan_json",
      type: "GET",
    },
    columns: [
      { data: "id" },
      { data: "nombre" },
      { data: "precio" },
    ],
  });
});