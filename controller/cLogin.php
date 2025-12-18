<?php

    /*
     * Autor: Alberto Méndez 
     * Fecha de actualización: 18/12/2025
     */

    if(isset($_REQUEST['Cancelar'])){
        $_SESSION["paginaEnCurso"]="inicioPublico";
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }
    
    if(isset($_REQUEST['Entrar'])){    
        $codUsuario = $_REQUEST['codUsuario']==null ? '' : $_REQUEST['codUsuario'];
        $password = $_REQUEST['password']==null ? '' : $codUsuario.$_REQUEST['password'];
        
         $usuarioPDO = new UsuarioPDO();
        $usuario = $usuarioPDO->validarUsuario($codUsuario, $password);
        if ($usuario != false) {
            $_SESSION['userAMNDWESLoginLogoff'] = $usuario;
            $_SESSION['paginaEnCurso'] = 'inicioPrivado';
        }
    }

require_once $view["Layout"];
?>