<?php

class Animal {
    private $nombre;
    private $especie;
    private $edad;
    private $raza;
    private $sexo;
    private $descripcion;
    private $emoji;
    private $foto;

    public function __construct($nombre, $especie, $edad, $raza = '', $sexo = '', $descripcion = '', $emoji = '', $foto = '') {
        $this->nombre      = $nombre;
        $this->especie     = $especie;
        $this->edad        = $edad;
        $this->raza        = $raza;
        $this->sexo        = $sexo;
        $this->descripcion = $descripcion;
        $this->emoji       = $emoji;
        $this->foto        = $foto;
    }

    public function getNombre()      { return $this->nombre; }
    public function getEspecie()     { return $this->especie; }
    public function getEdad()        { return $this->edad; }
    public function getRaza()        { return $this->raza; }
    public function getSexo()        { return $this->sexo; }
    public function getDescripcion() { return $this->descripcion; }
    public function getEmoji()       { return $this->emoji; }
    public function getFoto()        { return $this->foto; }
}
