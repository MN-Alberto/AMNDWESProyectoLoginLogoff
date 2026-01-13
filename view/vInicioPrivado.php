<?php
    /*
     * Autor: Alberto Méndez 
     * Fecha de actualización: 18/12/2025
     */
?>

    
<header>
<h1><b>Proyecto Login Logoff</b></h1>
</header>

<main>
        <h1><b>Inicio Privado</b></h1>
        
        <?php
        echo "<h3>Bienvenido/a ". $avInicioPrivado["descUsuario"] . "</h3>";

        if ($avInicioPrivado['numConexiones'] <= 1) {
            echo "¡Esta es tu primera conexión!<br>";
        } else {
          if($avInicioPrivado['fechaHoraUltimaConexionAnterior'] instanceof DateTime){
            
                $formatoFecha=new IntlDateFormatter('es_ES', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
                $fecha=$formatoFecha->format($avInicioPrivado['fechaHoraUltimaConexionAnterior']);
                $hora=$avInicioPrivado['fechaHoraUltimaConexionAnterior']->format('H:i');

                echo "Esta es la vez número " . $avInicioPrivado['numConexiones'] . " que se conecta.<br>";
                echo "Usted se conectó por última vez el <br>";
                echo $fecha . " a las " . $hora;
          }  
        }
        ?>

        <form action=<?php echo $_SERVER["PHP_SELF"];?> method="post" id="f1">
            <input type="submit" id="Aceptar" name="Aceptar" value="Detalle"/>
            <input type="submit" id="cerrar" name="cerrar" value="Cerrar Sesion"/>
      </form> 
</main>