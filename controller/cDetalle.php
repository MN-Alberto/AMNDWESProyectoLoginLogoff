<?php

    if(isset($_REQUEST['cerrar'])){
        $_SESSION["paginaEnCurso"]=$_SESSION["paginaAnterior"];
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }

require_once $view["Layout"];
?>