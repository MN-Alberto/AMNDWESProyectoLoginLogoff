<?php  
    if(isset($_REQUEST['Cancelar'])){
    $_SESSION["paginaEnCurso"]="inicioPublico";
    header("Location: indexProyectoLoginLogoff.php");
    exit;
    }
    
    if(isset($_REQUEST['Entrar'])){    
    $_SESSION["paginaAnterior"]=$_SESSION["paginaEnCurso"];
    $_SESSION["paginaEnCurso"]="inicioPrivado";
    header("Location: indexProyectoLoginLogoff.php");
    exit;
    }
    
?>
    <header>
         <h1><b>Login</b></h1>
    </header>
<main>   

        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <table>
            <tr>
                
                <td><label for="usuario" id="us">Nombre:</label></td>
                <td><input type="text" name="usuario" id="usuario" placeholder="Introduce nombre de usuario"></td>
            
            </tr>
            
            <tr>
            <td><label for="usuario" id="ps">Contraseña:</label></td>
            <td><input type="password" name="pass" id="pass" placeholder="Introduce contraseña:"></td>
            
            </tr>
            </table>
            <input type="submit" id="Entrar" name="Entrar" value="Entrar"/>
            <input type="submit" id="Cancelar" name="Cancelar" value="Cancelar"/>
            <input type="submit" id="Registrarse" name="Registrarse" value="Registrarse"/>
        </form>
    </main>