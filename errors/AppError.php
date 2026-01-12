<?php

    class AppError{
        
        private string $codError;
        private string $descError;
        private string $archivoError;
        private int $lineaError;
        private string $paginaSiguiente;
        
        
        public function __construct(string $codError, string $descError, string $archivoError, int $lineaError, string $paginaSiguiente) {
            $this->codError = $codError;
            $this->descError = $descError;
            $this->archivoError = $archivoError;
            $this->lineaError = $lineaError;
            $this->paginaSiguiente = $paginaSiguiente;
        }
        
        
        public function getCodError(): string {
            return $this->codError;
        }

        public function getDescError(): string {
            return $this->descError;
        }

        public function getArchivoError(): string {
            return $this->archivoError;
        }

        public function getLineaError(): int {
            return $this->lineaError;
        }

        public function getPaginaSiguiente(): string {
            return $this->paginaSiguiente;
        }

        public function setCodError(string $codError): void {
            $this->codError = $codError;
        }

        public function setDescError(string $descError): void {
            $this->descError = $descError;
        }

        public function setArchivoError(string $archivoError): void {
            $this->archivoError = $archivoError;
        }

        public function setLineaError(int $lineaError): void {
            $this->lineaError = $lineaError;
        }

        public function setPaginaSiguiente(string $paginaSiguiente): void {
            $this->paginaSiguiente = $paginaSiguiente;
        }
    }

?>