<?php

include_once('ciudad.php');
include_once('Collector.php');

class CiudadCollector extends Collector
{
  
  function showCiudades() {
    $rows = self::$db->getRows("SELECT * FROM ciudad ");        

    $arrayCiudad= array();        
    foreach ($rows as $c){
      $aux = new Ciudad($c{'id'},$c{'Nombre'});
      array_push($arrayCiudad, $aux);
    }
    return $arrayCiudad;        
  }
function showCiudad($id) {
    $rows = self::$db->getRows("SELECT * FROM ciudad where id= ? ", array ("{$id}"));        
    $ObjCiudad= new Ciudad($rows[0]{'id'},$rows[0]{'Nombre'});
    return $ObjCiudad;        
  }
function UpdateCiudad($id,$Nombre) {
    $insertrow = self::$db->updateRow("UPDATE public.ciudad SET Nombre = ? where id = ? ", array ("{$Nombre}",$id));

}
function deleteCiudad($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.ciudad where id = ? ", array ("{$id}"));

}
function createCiudad($Nombre){
   $insertrow = self::$db->insertRow("INSERT INTO public.ciudad(Nombre) VALUES (?)", array("{$Nombre}"));
}


}
?>
