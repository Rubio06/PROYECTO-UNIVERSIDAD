<?php
    function Conectarse(){
        $servidor="localhost";
        $basededatos="universidad";
        $usuario ="root";
        $clave ="";

        $cn = mysqli_connect($servidor,$usuario,$clave) or die ("Error conectando a la base de datos Almacen");
        mysqli_select_db($cn,$basededatos) or die ("Error seleccionado la base de datos Almacen");
        return $cn;
    }
?>