<?php

class Demo
{
    private $idDemo;
    private $nombre;
   private  $apellido;
    
     function __construct($idDemo, $nombre,$apellido) {
       $this->idDemo = $idDemo;
       $this->nombre = $nombre;
       $this->apellido = $apellido;
     }
    
     function setIdDemo($idDemo){
       $this->idDemo = $idDemo;
     } 
     function getIdDemo(){
       return $this->idDemo;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
      function setApellido($apellido){
       $this->apellido = $apellido;
     } 
     function getApellido(){
       return $this->apellido;
     } 
}

?> 
