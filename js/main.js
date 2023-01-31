
$(document).ready(function () {
    $("button").click(function () {
        var nombres = $('#nombres').val();
        var apellidos = $('#apellidos').val();
        var tipodocumento = $('#tipodocumento').val();
        var documento = $('#documento').val();
        var codciudad = $('#codciudad').val();
        var telefono = $('#telefono').val();
        var email = $('#email').val();
        var idcarrera = $('#idcarrera').val();
        // var terminos = $('#terminos').val();
        if ($('#terminos').val().checked) {
            terminos = "RECHAZADO";
        } else {
            terminos = "ACEPTADO";
        }
        var comentarios = $('#comentarios').val();

        $.get("procesar.php", {
            nombres: nombres,
            apellidos: apellidos,
            tipodocumento: tipodocumento,
            documento: documento,
            codciudad: codciudad,
            telefono: telefono,
            email: email,
            idcarrera: idcarrera,
            terminos: terminos,
            comentarios: comentarios
        }, function (respuesta) {
            $('#contenedor').text(respuesta);
            document.getElementById("nombres").value = "";
            document.getElementById("apellidos").value = "";
            document.getElementById("documento").value = "";
            document.getElementById("telefono").value = "";
            document.getElementById("email").value = "";
            document.getElementById("terminos").value = "";
            document.getElementById("comentarios").value = "";
        });
    });
});

let botonEnviar = document.getElementById("btn-enviar");
let terminos = document.getElementById("terminos");

terminos.addEventListener("click", ()=>{
    if (terminos.checked) {
        botonEnviar.style.background = "rgb(0, 0, 90)";
        botonEnviar.style.disabled = false;
    } else {
        botonEnviar.style.background = "rgba(0, 0, 90, 0.589)";
        botonEnviar.style.disabled = true;
    }
});
