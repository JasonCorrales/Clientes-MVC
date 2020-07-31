<?php

require_once 'baseDatos/ConexionBD.php';
require_once 'Cliente.php';

class ClienteModel {
    
    private $bd;

    function __construct() {
        $this->bd = new ConexionBD();
    }

    // listarClientes -> SELECT * FROM....
   public function listarClientes(){
       $this->bd->getConeccion();
       $sql = "SELECT * FROM CLIENTE";
       $registros = $this->bd->executeQueryReturnData($sql); 
       $this->bd->cerrarConeccion();   
       $clientes = array(); 
       
       foreach ($registros as $cliente) {
           $cliente = new Cliente($cliente['id'],$cliente['dni'],$cliente['Nombre'],$cliente['Apellido'],$cliente['Correo'],$cliente['Telefono']);
           array_push($clientes, $cliente);
       }
       
       return $clientes;      
   }

    // insertarCliente -> INSERT..
   public function guardarCliente($cliente){
       $this->bd->getConeccion();
       $sql="INSERT INTO CLIENTE(DNI,NOMBRE,APELLIDO,CORREO,TELEFONO) VALUES(?,?,?,?,?)";
       $paramType='issss';
       $paramValue = array($cliente->getDni(),$cliente->getNombre(),$cliente->getApellido(),$cliente->getCorreo(),$cliente->getTelefono());
       
       $this->bd->executeQuery($sql, $paramType, $paramValue);
       
       $this->bd->cerrarConeccion();
   }
   
   // eliminarCliente -> DELETE...
   public function eliminarCliente($id){
       $this->bd->getConeccion();
       $sql="DELETE FROM CLIENTE WHERE ID=?";
       $paramType='i';
       $paramValue = array($id);       
       $this->bd->executeQuery($sql, $paramType, $paramValue);       
       $this->bd->cerrarConeccion();       
   }


   // actualizarCliente -> UPDATE..
  // buscarCliente -> SELECT...WHERE...

}