<?php        
   // Entra solo en el caso de que no existe el controller
   require_once './controller/ClienteController.php';
   $controller = new ClienteController();
   
   if(!isset($_GET['controller'])){
       $controller->listarClientes();
   }else{       
       switch($_GET['action'])
       {
            case 'registrar':              
                $controller->registrarCliente();
                break;
            case 'eliminar': 
                $controller->listarClientes();
                break;
            case 'actualizar':
                break;
            case 'listar': $controller->listarClientes();
                break;
       }       
   }
?>
