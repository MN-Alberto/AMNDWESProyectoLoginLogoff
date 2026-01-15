<?php
    
    require_once "./model/UsuarioPDO.php";
    require_once "./model/Usuario.php";
    
    
    if(isset($_REQUEST['Cancelar'])){
        $_SESSION["paginaEnCurso"]=$_SESSION["paginaAnterior"];
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }

    
    require_once $view["Layout"];
?>