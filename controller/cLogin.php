<?php

    if(isset($_REQUEST['Cancelar'])){
        $_SESSION["paginaEnCurso"]="inicioPublico";
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }
    
    if(isset($_REQUEST['Entrar'])){    
        $_SESSION["paginaAnterior"]=$_SESSION["paginaEnCurso"];
        $_SESSION["paginaEnCurso"]="inicioPrivado";
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }

require_once $view["Layout"];
?>