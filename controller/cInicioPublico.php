<?php

    /*
    * Autor: Alberto Méndez 
    * Fecha de actualización: 18/12/2025
    */

    if(isset($_REQUEST['Login'])){
        $_SESSION["paginaEnCurso"]="login";
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }

    require_once $view["Layout"]; //Añadimos la página del layout accediendo a la clave del array correspondiente.
?>