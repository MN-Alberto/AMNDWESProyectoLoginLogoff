<?php

    require_once 'core/libreriaValidacionFormulario.php'; //Añadimos la libreria de validación.

    //Array asociativo para las distintas páginas del controlador con sus respectivas rutas.
    $controller=[
        "inicioPublico" => "controller/cInicioPublico.php",
        "login" => "controller/cLogin.php"
    ];
    
    //Array asociativo para las distintas páginas de la vista con sus respectivas rutas.
    $view=[
        "Layout" => "view/Layout.php",
        "inicioPublico" => "view/vInicioPublico.php",
        "login" => "view/vLogin.php"
    ];
?>