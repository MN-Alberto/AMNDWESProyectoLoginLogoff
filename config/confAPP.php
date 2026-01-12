<?php

/*
 * Autor: Alberto Méndez 
 * Fecha de actualización: 18/12/2025
 * 
 */

    require_once './core/libreriaValidacionFormulario.php'; //Añadimos la libreria de validación.
    require_once './model/DBPDO.php';
    require_once './model/Usuario.php';
    require_once './model/UsuarioPDO.php';

    //Array asociativo para las distintas páginas del controlador con sus respectivas rutas.
    $controller=[
        "inicioPublico" => "controller/cInicioPublico.php",
        "login" => "controller/cLogin.php",
        "inicioPrivado" => "controller/cInicioPrivado.php",
        "detalle" => "controller/cDetalle.php"
    ];
    
    //Array asociativo para las distintas páginas de la vista con sus respectivas rutas.
    $view=[
        "Layout" => "view/Layout.php",
        "inicioPublico" => "view/vInicioPublico.php",
        "login" => "view/vLogin.php",
        "inicioPrivado" => "view/vInicioPrivado.php",
        "detalle" => "view/vDetalle.php"
    ];
?>