<?php

    if(empty($_SESSION['userAMNDWESLoginLogoff'])){
        $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
        $_SESSION['paginaEnCurso']='inicioPublico';
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }

    if(isset($_REQUEST['Volver'])){
        $_SESSION["paginaEnCurso"]=$_SESSION["paginaAnterior"];
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }

    require_once $view["Layout"];
?>