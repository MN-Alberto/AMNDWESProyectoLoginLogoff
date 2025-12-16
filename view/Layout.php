<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CFGS - Desarrollo de Aplicaciones Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #171615;
            margin: 0;
            padding: 0;
        }
        header {
            background: #242222;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        
        #f1{
            position: relative;
            left: 70%;
        }
        
        h1 {
            margin: 0;
            font-family: "titulo";
            font-size: 60px;
        }
        main {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            background: #3d3938;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            height: 555px;
        }
        main img{
            height: 555px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        footer{
            margin: auto;
            background-color: #313131;
            text-align: center;
            height: 100px;
	    color: white;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
	main{
	text-align:center;
	justify-content:center;
	}
        a{
            text-decoration: none;
            color:purple;
        }
        
        table{
            border-collapse: collapse;
            width: 100%;
            border-width: 4px;
        }
        
        td{
            padding: 10px;
            border-width: 4px;
        }
        
        #encabezado{
            background-color: lightsteelblue;
            font-weight: bold;
        }
        
        .codigos{
            background-color: lightblue;
        }
        
        .mostrar{
            background-color: lightsalmon;
        }
        
        tr{
            height: 80px;
        }
        h2{
            text-align: center;
        }
        input{
            background-color: #52a535;
            width: 140px;
            height: 40px;
            cursor: pointer;
        }
        .btn:active{
            background-color: green;
        }
        
        img{
            background: white;
            border-radius: 50%;
        }
        

        @font-face {
            font-family: 'titulo';
            src: url('webroot/MinecraftTen-VGORe.ttf');
        }
        
        p{
            color: #64c349;
        }
        
        a{
            color: #64c349;
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <?php
        require_once $view[$_SESSION["paginaEnCurso"]]; //Añadimos la pagina en curso para cargarla.
    ?>
    
    <footer>
        <p><a href="../AMNDWESProyectoLoginLogoff/indexProyectoLoginLogoff.php">Alberto Méndez Núñez</a></p>
        <a href="https://github.com/MN-Alberto/AMNDWESProyectoLoginLogoff" target="_blank"><img src="webroot/img.png" height="40px"/></a>
    </footer>
</body>
</html>