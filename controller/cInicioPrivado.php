<?php

    /*
    * Autor: Alberto Méndez 
    * Fecha de actualización: 18/12/2025
    */

   require_once './model/DBPDO.php';

    if(empty($_SESSION['userAMNDWESLoginLogoff'])){
        $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
        $_SESSION['paginaEnCurso']='inicioPublico';
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }

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
    
    if(isset($_REQUEST['mantenimiento'])){
        $_SESSION["paginaAnterior"]=$_SESSION["paginaEnCurso"];
        $_SESSION["paginaEnCurso"]="mantenimiento";
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    } 
    
    if(isset($_REQUEST['Error'])){
        DBPDO::ejecutaConsulta("select * from gfrdjgsdyuhbrejkdhvnodf;");
    } 
    
    $avInicioPrivado=[
        'descUsuario' => $_SESSION['userAMNDWESLoginLogoff']->getDescUsuario(),
        'numConexiones' => $_SESSION['userAMNDWESLoginLogoff']->getNumConexiones(),
        'fechaHoraUltimaConexionAnterior' => $_SESSION['userAMNDWESLoginLogoff']->getFechaHoraUltimaConexionAnterior()
    ];

require_once $view["Layout"];
?>