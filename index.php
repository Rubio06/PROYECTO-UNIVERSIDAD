<?php 
    include("conexion/conexion.php");
    $cn = Conectarse();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,700;1,700&family=Dosis:wght@500;600&family=Heebo:wght@100;200;300&family=Lilita+One&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<body>
    <div class="container">
        <div class="segundo-contenedor">
        <h1 class="titulo">FORMULARIO DE DATOS</h1>
            <div class="input-datos">
                <label for="nombre">NOMBRES DEL ALUMNO</label>
                <input type="text" id="nombres" name="nombres">
            </div>
            <div class="input-datos">
                <label for="apellido">APELLIDO PATERNO Y MATERNO</label>
                <input type="text" id="apellidos" name="apellidos">
            </div>     
            <div class="input-datos div-dni">
                <label for="dni">NRO. DNI:</label>
                <select name="tipodocumento" id="tipodocumento">
                    <?php
                        $sql = "SELECT id, documento FROM tipodocumento";
                        $query = mysqli_query($cn,$sql);
                        while ($lista = mysqli_fetch_array($query)){
                    ?>
                        <option value="<?php echo $lista["id"]?>"><?php echo $lista["documento"]?></option>
                    <?php }?>
                </select>
                <input type="text" id="documento" name="documento">
            </div>
            <div class="input-datos div-telefono">
                <label for="dni" class="label-telefono">N. TELEFONO</label>
                <select name="codciudad" id="codciudad">
                    <?php
                        $sql = "SELECT id, codigociudad FROM codigociudad";
                        $query = mysqli_query($cn,$sql);
                        while ($lista = mysqli_fetch_array($query)){
                    ?>
                        <option value="<?php echo $lista["id"]?>"><?php echo $lista["codigociudad"]?></option>
                    <?php }?>
                </select>
                <input type="number" id="telefono" name="telefono">
            </div>            
            <div class="input-datos">
                <label for="email">E-MAIL:</label>
                <input type="email" id="email" name="email">
            </div>        
            <div class="input-datos datos-carrera">
                <label for="carrera">CARRERA QUE DESEA CONSULTAR:</label>
                <select name="idcarrera" id="idcarrera">
                    <option>SELECCIONE UNA CARRERA ...</option>
                <?php
                    $sql = "SELECT id,carrera FROM carrera";
                    $query = mysqli_query($cn,$sql);
                    while ($lista = mysqli_fetch_array($query)){
                ?>
                    <option value="<?php echo $lista["id"]?>"><?php echo $lista["carrera"]?></option>
                <?php }?>
                </select>
            </div>
            <div class="div-terminos">
                <input type="checkbox" id="terminos" name="terminos">
                <label for="terminos" style="font-weight: 100;">Acepto <a href="">Terminos y condiciones</a></label>
            </div>
            <div class="input-datos">
                <label for="">Comentarios</label>
                <textarea name="comentarios" id="comentarios" cols="10" rows="4" style="resize:none;"></textarea>
            </div>
            <div class="input-datos boton">
                <button id="btn-enviar">Enviar datos</button>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>