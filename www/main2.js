$(document).ready(function () {
  $("#btnSend1").click(function () {
    var errores1 = "";

    // Validado Nombre ==============================
    if ($("#names").val() == "") {
      errores1 += "<p>Escriba un nombre</p>";
      $("#names").css("border-bottom-color", "#F14B4B");
    } else {
      $("#names").css("border-bottom-color", "#d1d1d1");
    }

    // Validado Correo ==============================
    if ($("#email").val() == "") {
      errores1 += "<p>Ingrese un correo</p>";
      $("#email").css("border-bottom-color", "#F14B4B");
    } else {
      $("#email").css("border-bottom-color", "#d1d1d1");
    }

    // Validado Mensaje ==============================
    if ($("#mensaje").val() == "") {
      errores1 += "<p>Escriba un mensaje</p>";
      $("#mensaje").css("border-bottom-color", "#F14B4B");
    } else {
      $("#mensaje").css("border-bottom-color", "#d1d1d1");
    }

    // ENVIANDO MENSAJE ============================
    if ((errores1 == "") == false) {
      var mensajeModal1 =
        '<div class="modal_wrap">' +
        '<div class="mensaje_modal">' +
        "<h3>Importante!</h3>" +
        errores1 +
        '<span id="btnClose">Cerrar</span>' +
        "</div>" +
        "</div>";

      $("#principal").append(mensajeModal1);
    } else {
      $("#prueba").submit();
    }

    // CERRANDO MODAL ==============================
    $("#btnClose").click(function () {
      $(".modal_wrap").remove();
    });
  });
});
