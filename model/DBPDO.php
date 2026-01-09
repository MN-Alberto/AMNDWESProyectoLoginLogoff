<?php

/*
 * Autor: Alberto Méndez 
 * Fecha de actualización: 18/12/2025
 * 
 */

    require_once "./config/confDB.php";

    class DBPDO {
        public static function ejecutaConsulta(string $sentenciaSQL, array $parametros = []) {
            try {
                $miDB=new PDO(RUTA, USUARIO, PASS);

                $query=$miDB->prepare($sentenciaSQL);

                $query->execute($parametros);

                return $query->fetch();
                
        } catch (PDOException $e){
            return null;
        }
    }
 }
?>