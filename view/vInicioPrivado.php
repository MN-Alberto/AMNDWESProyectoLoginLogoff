<?php
    /*
     * Autor: Alberto Méndez 
     * Fecha de actualización: 18/12/2025
     */
?>
<main>
        <h1><b>Inicio Privado</b></h1>
        
        <h3>Bienvenido al inicio privado de la aplicacion</h3>
        
    <?php
        if (isset($_SESSION['userAMNDWESLoginLogoff'])) {

            $oUsuario = $_SESSION['userAMNDWESLoginLogoff'];

            if ($oUsuario->getNumConexiones() > 1) {
    ?>
                <p>Bienvenido <?php echo $oUsuario->getDescUsuario(); ?>.</p>
                <p>Es la vez numero <?php echo $oUsuario->getNumConexiones(); ?> que se conecta.</p>
    <?php
            } else {
    ?>
                <p>Bienvenido <?php echo $oUsuario->getDescUsuario(); ?>.</p>
                <p>Es la primera vez que se conecta.</p>
    <?php
            }
        }
    ?>
        
        <form action=<?php echo $_SERVER["PHP_SELF"];?> method="post" id="f1">
            <input type="submit" id="Aceptar" name="Aceptar" value="Detalle"/>
            <input type="submit" id="cerrar" name="cerrar" value="Cerrar Sesion"/>
      </form> 
</main>