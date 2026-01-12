<?php

    require_once "confDB.php";

    class DBPDO {
        

        public static function ejecutaConsulta(string $sentenciaSQL, array $parametros = []) {
            try {
                $miDB=new PDO(RUTA, USUARIO, PASS);

                $query=$miDB->prepare($sentenciaSQL);

                $query->execute($parametros);

        } catch (PDOException $e){
            return null;
        }
    }
 }
?>