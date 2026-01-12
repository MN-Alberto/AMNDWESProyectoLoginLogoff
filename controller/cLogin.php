<?php

    /*
     * Autor: Alberto Méndez 
     * Fecha de actualización: 18/12/2025
     */

    require_once "./model/UsuarioPDO.php";
    require_once "./model/Usuario.php";
    require_once "./core/libreriaValidacionFormulario.php";

    if(isset($_REQUEST['Cancelar'])){
        session_destroy();
        $_SESSION["paginaEnCurso"]="inicioPublico";
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }

    $aErrores=[
    'codUsuario' => null,
    'password' => null
    ];

    $aRespuestas=[
        'codUsuario' => '',
        'password' => ''
    ];

    $entradaOK=true;
    
    if(isset($_REQUEST['Entrar'])){   
    
        $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    
        $aErrores['codUsuario']=validacionFormularios::comprobarAlfaNumerico($_REQUEST['usuario'], 255, 0, 0);
        $aErrores['password']=validacionFormularios::validarPassword($_REQUEST['pass'], 20, 2, 1, 1);
        
        foreach ($aErrores as $valorCampo => $error) {
            if ($error != null) {
                $entradaOK = false;
            }
        }

        if($entradaOK){
            $usuario=UsuarioPDO::validarUsuario($codUsuario, $password);

            if(!isset($usuario)){
                $entradaOK=false;
            }
        }

    } else{
        $entradaOK=false;

        UsuarioPDO::actualizarUltimaConexion($codUsuario);
        $_SESSION['userAMNDWESLoginLogoff'] = $usuario;

        $_SESSION['paginaEnCurso'] = 'inicioPrivado';
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }

    require_once $view["Layout"];
?>