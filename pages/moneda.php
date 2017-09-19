<?php
class Moneda
{
    private $id;
    private $Nombre;
    private $id_ciudad_fk;
  
    
    
    function __construct($id, $Nombre, $id_ciudad_fk) {  
     $this->id = $id;  
     $this->Nombre = $Nombre;  
     $this->id_ciudad_fk = $id_ciudad_fk;
   }  
    
    
   public function getIdM() {  
     return $this->id;  
   }  
   public function setId($id){  
     return $this->id = $id;  
   }  
    
    public function getNombreM() {  
     return $this->Nombre;  
   }  
   public function setNombre($Nombre){  
     return $this->Nombre = $Nombre;  
   }  
   
   public function getIdCiudad() {  
     return $this->id_ciudad_fk;  
   }  
   public function setIdCiudad($id_ciudad_fk){  
     return $this->id_ciudad_fk = $id_ciudad_fk;  
   } 
   
}
?> 
