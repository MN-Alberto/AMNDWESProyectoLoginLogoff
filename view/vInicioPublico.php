<?php
    /*
     * Autor: Alberto Méndez 
     * Fecha de actualización: 18/12/2025
     */
?>
<!-- La vista del inicio público solo tiene el contenido del body -->

    
        <header>
        <h1 id="h1Publico"><b>Proyecto Login Logoff</b></h1>
        
        <h3 style="margin-right: 40px;">Idioma: </h3>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <input type="submit" name="español" id="español" class="btn" value="Español">
            <input type="submit" name="ingles" id="ingles" class="btn" value="English">
            <input type="submit" name="portugues" id="portugues" class="btn" value="Português">
            <input type="submit" name="ruso" id="ruso" class="btn" value="Русский">
        </form>
        </header>

    <main>
        <h1><b>Inicio Publico</b></h1>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" id="f1">
            <input type="submit" id="Login" name="Login" value="Login">
        </form> 
        <img id="arbol" src="./webroot/arbol.PNG">
    </main>