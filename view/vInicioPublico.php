<?php
    if(isset($_REQUEST['Login'])){
        $_SESSION["paginaEnCurso"]="login";
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }
?>
<!-- La vista del inicio público solo tiene el contenido del body -->
    
    <main>
        <h1><b>Inicio Publico</b></h1>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" id="f1">
            <input type="submit" id="Login" name="Login" value="Login">
        </form> 
    </main>