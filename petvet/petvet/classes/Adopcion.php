<?php

class Adopcion {
    private $animal;
    private $nombreAdoptante;
    private $email;
    private $telefono;
    private $motivo;

    public function __construct($animal, $nombre, $email, $telefono, $motivo) {
        $this->animal = $animal;
        $this->nombreAdoptante = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->motivo = $motivo;
    }

    public function getAnimal() {
        return $this->animal;
    }

    public function getNombreAdoptante() {
        return $this->nombreAdoptante;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getMotivo() {
        return $this->motivo;
    }
}