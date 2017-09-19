<?php
class Ciudad
{
    private $id;
    private $Nombre;
    
  
    
    
    function __construct($id, $Nombre) {  
     $this->id = $id;  
     $this->Nombre = $Nombre;
   }  
    
    
   public function getId() {  
     return $this->id;  
   }  
   public function setId($id){  
     return $this->id = $id;  
   }  
    
    public function getNombre() {  
     return $this->Nombre;  
   }  
   public function setNombre($Nombre){  
     return $this->Nombre = $Nombre;  
   }  
   
}
?> 
