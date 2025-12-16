<?php  
    if(isset($_REQUEST['Cancelar'])){
    $_SESSION["paginaEnCurso"]="inicioPublico";
    header("Location: indexProyectoLoginLogoff.php");
    exit;
    }
?>
    <header>
         <h1><b>Login</b></h1>
    </header>
<main>   

        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <input type="submit" id="Entrar" name="Entrar" value="Entrar"/>
            <input type="submit" id="Cancelar" name="Cancelar" value="Cancelar"/>
            <input type="submit" id="Registrarse" name="Registrarse" value="Registrarse"/>
        </form>
    </main>