<?php

    if(isset($_REQUEST['Login'])){
        $_SESSION["paginaEnCurso"]="login";
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }

    require_once $view["Layout"]; //Añadimos la página del layout accediendo a la clave del array correspondiente.
?>