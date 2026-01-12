<?php
    /*
     * Autor: Alberto Méndez 
     * Fecha de actualización: 18/12/2025
     */
?>
<!-- La vista del inicio público solo tiene el contenido del body -->
    <main>
        <h1><b>Inicio Publico</b></h1>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" id="f1">
            <input type="submit" id="Login" name="Login" value="Login">
        </form> 
    </main>