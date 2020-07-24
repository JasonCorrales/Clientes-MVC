<?php

require_once 'model/Cliente.php';

class ClienteController {

    private $modelo;
    
    public function __construct() {
        $this->modelo = new Cliente();
    }
    
    public function listarClientes(){
        require_once 'view/header.php';
        require_once 'view/cliente/vistaListaClientes.php';
    }
    
    public function registrarCliente(){
        require_once 'view/header.php';
        require_once 'view/cliente/vistaRegistarCliente.php';
    }
    
}
