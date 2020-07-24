<?php

  class ConexionBD{
     private $servidor = 'localhost';
     private $usuario = 'root';
     private $password = '';
     private $baseDatos = 'test';
     
     public static function conectar(){
         //$coneccion = mysqli_connect($servidor, $usuario, $password, $baseDatos);
         $coneccion = mysqli_connect('localhost','root', '', 'test');
         mysqli_query($coneccion, "SET NAMES 'utf8'");
         
         return $coneccion;
     }     
  }
