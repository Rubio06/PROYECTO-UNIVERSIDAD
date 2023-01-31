$(document).ready(function (){
    $("#btn-enviar").click(function(){
        var nombres = $('#nombres').val();
        var apellidos = $('#apellidos').val();
        var tipodocumento = $('#tipodocumento').val();
        var documento = $('#documento').val();
        var codciudad = $('#codciudad').val();
        var telefono = $('#telefono').val();
        var email = $('#email').val();
        var idcarrera = $('#idcarrera').val();
        var terminos = $('#terminos').val();
        var comentarios = $('#comentarios').val();

        $.get("procesar.php",{
            nombres:nombres,
            apellidos:apellidos,
            tipodocumento:tipodocumento,
            documento:documento,
            codciudad:codciudad,
            telefono:telefono,
            email:email,
            idcarrera:idcarrera,
            terminos:terminos,
            comentarios:comentarios
        },function(respuesta){
            $('#contenedor').text(respuesta);
            // console.log(respuesta);
        });
    });
});


