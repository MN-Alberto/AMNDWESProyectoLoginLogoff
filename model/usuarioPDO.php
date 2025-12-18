<?php
    
    /*
    * Autor: Alberto Méndez 
    * Fecha de actualización: 18/12/2025
    */

    require_once "DBPDO.php";
    require_once "Usuario.php";

    class UsuarioPDO{  
        public static function validarUsuario(string $codUsuario, string $password) {
            
            $query="SELECT * FROM T01_Usuarios 
                WHERE T01_CodUsuario = ? 
                AND T01_Password = SHA2(?, 256)";
            $parametros=[$codUsuario, $password];
            
            $resultado= DBPDO::ejecutaConsulta($query, $parametros);
            
            if(empty($resultado)){
                return null;
            }
            
            $usuario=new Usuario(
               $col["T01_CodUsuario"],
               $col["T01_Password"],
               $col["T01_DescUsuario"],
               $col["T01_NumConexiones"],
               new DateTime($col["T01_FechaHoraUltimaConexion"]),
               $col["T01_Perfil"],
               $col["T01_ImagenUsuario"]
            );  
            
            self::actualizarUltimaConexionYUsuario($usuario);
            
            $_SESSION['userAMNDWESLoginLogoff'] = $usuario;
            $_SESSION['paginaEnCurso'] = 'inicioPrivado';

            return $usuario;
        }      
    }
?>