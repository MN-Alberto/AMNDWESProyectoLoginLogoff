<?php
    if(isset($_REQUEST['Aceptar'])){
        $_SESSION["paginaAnterior"]=$_SESSION["paginaEnCurso"];
        $_SESSION["paginaEnCurso"]="detalle";
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }

    if(isset($_REQUEST['cerrar'])){
        $_SESSION["paginaEnCurso"]="inicioPublico";
        header("Location: indexProyectoLoginLogoff.php");
        exit;
    }  
?>
<main>
        <h1><b>Inicio Privado</b></h1>
        
        <h3>Bienvenido al inicio privado de la aplicación</h3>
        
        <form action=<?php echo $_SERVER["PHP_SELF"];?> method="post" id="f1">
            <input type="submit" id="Aceptar" name="Aceptar" value="Detalle"/>
            <input type="submit" id="cerrar" name="cerrar" value="Cerrar Sesion"/>
      </form> 
</main>