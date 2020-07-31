<?php

require_once 'model/ClienteModel.php';

class ClienteController {

    private $modelo;
    
    public function __construct() {
        $this->modelo = new ClienteModel();
    }
    
    public function listarClientes(){        
        $listaClientes = $this->modelo->listarClientes();
        require_once 'view/include/header.php';
        require_once 'view/cliente/vistaListaClientes.php';
    }
    
    public function registrarCliente(){
        require_once 'view/include/header.php';
        require_once 'view/cliente/vistaRegistrarCliente.php';      
    }
    
    public function guardarCliente(){
        $cliente = new Cliente(0,$_POST['dni'],$_POST['Nombre'],$_POST['Apellido'],$_POST['Correo'],$_POST['Telefono']);
        $this->modelo->guardarCliente($cliente);
        
        header("location:index.php");
    }
    
    public function eliminarCliente(){
        $id = $_GET['id'];
        $this->modelo->eliminarCliente($id);
        header("location:index.php");
    }
}
