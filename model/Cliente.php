<?php

require_once 'ConexionBD.php';

class Cliente {
    
    private $id;
    private $dni;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;
    private $coneccion;
    
    public function __construct() {
        $this->coneccion = ConexionBD::conectar();
    }
    
    function getId() {
        return $this->id;
    }

    function getDni() {
        return $this->dni;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getConeccion() {
        return $this->coneccion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setConeccion($coneccion) {
        $this->coneccion = $coneccion;
    }

    public function listasClientes(){
        $registros = array();
        $sql = "SELECT * FROM CLIENTE ORDER BY ID ASC";        
        $resultado= $this->coneccion->query($sql);
        
        while($row = mysqli_fetch_assoc($resultado)){
            array_push($registros, $row);
        }
        
        return $registros;
    }
        
}



















