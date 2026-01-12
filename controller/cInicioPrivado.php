<?php

    /*
    * Autor: Alberto Méndez 
    * Fecha de actualización: 18/12/2025
    */

    if(isset($_REQUEST['Aceptar'])){
        $_SESSION["paginaAnterior"]=$_SESSION["paginaEnCurso"];
        $_SESSION["paginaEnCurso"]="detalle";
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }

    if(isset($_REQUEST['cerrar'])){
        $_SESSION["paginaEnCurso"]="inicioPublico";
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }  

require_once $view["Layout"];
?>