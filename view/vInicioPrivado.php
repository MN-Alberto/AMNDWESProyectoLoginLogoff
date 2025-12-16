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
<header>
         <h1><b>Inicio Privado</b></h1>
        <form action=<?php echo $_SERVER["PHP_SELF"];?> method="post" id="f2">
            <input type="submit" id="Aceptar" name="Aceptar" value="Detalle"/>
            <input type="submit" id="cerrar" name="cerrar" value="Cerrar Sesion"/>
      </form> 
    </header>
<main>   
</main>