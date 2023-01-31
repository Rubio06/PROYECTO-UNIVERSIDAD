<?php
    include("conexion/conexion.php");
    $cn = Conectarse();

    $nombres = $_GET["nombres"];
    $apellidos = $_GET["apellidos"];
    $tipodocumento = $_GET["tipodocumento"];
    $documento = $_GET["documento"];
    $codciudad = $_GET["codciudad"];
    $telefono = $_GET["telefono"];
    $email = $_GET["email"];
    $idcarrera = $_GET["idcarrera"];
    $terminos = $_GET["terminos"];
    $comentarios = $_GET["comentarios"];

    $sql = "INSERT INTO `datos`(`nombres`, `apellidos`, `tipodocumento`, `documento`, `codciudad`, `telefono`, `email`, `idcarrera`, `terminos`, `comentarios`) VALUES ('$nombres',' $apellidos','$tipodocumento','$documento','$codciudad','$telefono','$email','$idcarrera','$terminos','$comentarios')";
    $query = mysqli_query($cn,$sql);
?>