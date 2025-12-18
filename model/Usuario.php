<?php

    class Usuario{
        
        private string $codUsuario;
        private string $password;
        private string $descUsuario;
        private int $numAccesos;
        private DateTime $fechaHoraUltimaConexion;
        private DateTime $fechaHoraUltimaConexionAnterior;
        private string $perfil;
        
        
        public function getCodUsuario(): string {
            return $this->codUsuario;
        }

        public function getPassword(): string {
            return $this->password;
        }

        public function getDescUsuario(): string {
            return $this->descUsuario;
        }

        public function getNumAccesos(): int {
            return $this->numAccesos;
        }

        public function getFechaHoraUltimaConexion(): DateTime {
            return $this->fechaHoraUltimaConexion;
        }

        public function getFechaHoraUltimaConexionAnterior(): DateTime {
            return $this->fechaHoraUltimaConexionAnterior;
        }

        public function getPerfil(): string {
            return $this->perfil;
        }


        public function setCodUsuario(string $codUsuario): void {
            $this->codUsuario = $codUsuario;
        }

        public function setPassword(string $password): void {
            $this->password = $password;
        }

        public function setDescUsuario(string $descUsuario): void {
            $this->descUsuario = $descUsuario;
        }

        public function setNumAccesos(int $numAccesos): void {
            $this->numAccesos = $numAccesos;
        }

        public function setFechaHoraUltimaConexion(DateTime $fechaHoraUltimaConexion): void {
            $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
        }

        public function setFechaHoraUltimaConexionAnterior(DateTime $fechaHoraUltimaConexionAnterior): void {
            $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
        }

        public function setPerfil(string $perfil): void {
            $this->perfil = $perfil;
        }


        
    }
?>