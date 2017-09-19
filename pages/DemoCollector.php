<?php

include_once('Demo.php');
include_once('Collector.php');

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM demo ");        
    echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'id'},$c{'nombre'},$c{'apellido'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

}
?>

