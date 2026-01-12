<?php

    /*
     * Autor: Alberto Méndez 
     * Fecha de actualización: 18/12/2025
     */

    require_once "./model/UsuarioPDO.php";
    require_once "./model/Usuario.php";

    if(isset($_REQUEST['Cancelar'])){
        session_destroy();
        $_SESSION["paginaEnCurso"]="inicioPublico";
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }
    
    if(isset($_REQUEST['Entrar'])){    
        $codUsuario = $_REQUEST['usuario']==null ? '' : $_REQUEST['usuario'];
        $password = $_REQUEST['pass']==null ? '' : $_REQUEST['usuario'].$_REQUEST['pass'];
        
        // $usuarioPDO = new UsuarioPDO();
        $usuario = UsuarioPDO::validarUsuario($codUsuario, $password);
        
        if ($usuario !== null) {
            UsuarioPDO::actualizarUltimaConexion($codUsuario);
            $_SESSION['userAMNDWESLoginLogoff'] = $usuario;
            $_SESSION['paginaEnCurso'] = 'inicioPrivado';
            header("Location: indexProyectoLoginLogoff.php");
            exit;
        }
    }

require_once $view["Layout"];
?>