<?php
    if(isset($_REQUEST['Login'])){
        $_SESSION["paginaEnCurso"]="login";
        header("Location: indexProyectoLoginLogoff.php");
        exit;
        }
    
    if(empty($_COOKIE['idioma'])){
        setcookie('idioma','ES',time() + 3600);
    }
    
    if(isset($_REQUEST['español'])){
        setcookie('idioma','ES',time() + 3600);
    }
    
    if(isset($_REQUEST['ingles'])){
        setcookie('idioma','EN',time() + 3600);
    }
    
    if(isset($_REQUEST['portugues'])){
        setcookie('idioma','PT',time() + 3600);
    }
    
    if(isset($_REQUEST['ruso'])){
        setcookie('idioma','RU',time() + 3600);
    }
    
    ?>
<!-- La vista del inicio público solo tiene el contenido del body -->
    <header>
        <h1><b>Inicio Publico</b></h1>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" id="f1">
            <input type="submit" id="Login" name="Login" value="Login">
        </form> 
        
        <h3 style="margin-right: 20px;">Idioma: </h3>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <input type="submit" name="español" id="español" class="btn" value="Español">
            <input type="submit" name="ingles" id="ingles" class="btn" value="English">
            <input type="submit" name="portugues" id="portugues" class="btn" value="Português">
            <input type="submit" name="ruso" id="ruso" class="btn" value="Русский">
        </form>
    </header>
    
    <main>
        
    </main>