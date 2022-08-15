$(document).ready(function () {
  $("#btnSend").click(function () {
    var errores = "";

    // Validado Nombre ==============================
    $(".obli").each(function () {
      if ($(this).val() == "") {
        errores = "<p>todos los campos con * son obligatorios</p>";
        $(".obli").css("border-bottom-color", "#F14B4B");
      } else {
        $(".obli").css("border-bottom-color", "#d1d1d1");
      }
    });

    /* if (!$("input[name='spbebeo']").is(":checked")) {
      errores = "<p>todos los campos con * son obligatorios</p>";
    }

    if (!$("input[name='spalergiao']").is(":checked")) {
      errores = "<p>todos los campos con * son obligatorios</p>";
    } */

    if (!$("input[name='propio']").is(":checked")) {
      errores = "<p>todos los campos con * son obligatorios</p>";
    }

    if (!$("input[name='mudar']").is(":checked")) {
      errores = "<p>todos los campos con * son obligatorios</p>";
    }

    // ENVIANDO MENSAJE ============================
    if ((errores == "") == false) {
      var mensajeModal =
        '<div class="modal_wrap">' +
        '<div class="mensaje_modal">' +
        "<h3>Importante!</h3>" +
        errores +
        '<span id="btnClose">Cerrar</span>' +
        "</div>" +
        "</div>";
      $("body").append(mensajeModal);
    } else {
      $("#formularioregistro").submit();
    }
    // CERRANDO MODAL ==============================
    $("#btnClose").click(function () {
      $(".modal_wrap").remove();
    });
  });
});
