<?php

include_once('moneda.php');
include_once('Collector.php');

class MonedaCollector extends Collector
{
  
  function showMonedas() {
    $rows = self::$db->getRows("SELECT * FROM moneda ");        

    $arrayCiudad= array();        
    foreach ($rows as $c){
      $aux = new Moneda($c{'id'},$c{'Nombre'}, $c{'id_ciudad_fk'});
      array_push($arrayCiudad, $aux);
    }
    return $arrayCiudad;        
  }
function showMoneda($id) {
    $rows = self::$db->getRows("SELECT * FROM ciudad where id= ? ", array ("{$id}"));        
    $ObjCiudad= new Moneda($rows[0]{'id'},$rows[0]{'Nombre'}, $rows[0]{'id_ciudad_fk'});
    return $ObjCiudad;        
  }
function UpdateMoneda($id,$Nombre, $idCiudad) {
    $insertrow = self::$db->updateRow("UPDATE public.ciudad SET Nombre = ?, id_ciudad_fk = ? where id = ? ", array ("{$Nombre}","{$idCiudad}" ,$id));

}
function deleteMoneda($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.ciudad where id = ? ", array ("{$id}"));

}
function createMoneda($Nombre, $idCiudad){
   $insertrow = self::$db->getRows("INSERT INTO public.ciudad(Nombre, idCiudad) VALUES (?,?)", array("{$Nombre}","{$idCiudad}"));
}
function mostrar($Nombre){
   $row = self::$db->insertRow("SELECT * FROM   public.moneda,   public.ciudad WHERE   ciudad.id = ?", array("{$Nombre}"));
}


}

?>
