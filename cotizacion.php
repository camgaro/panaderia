<?php 
   require_once("conexion.php");
   echo "entro ese careculo";
    function insertarcotizacion($fecha,$documento,$serial,$cantidad,$precio){
   	  $conexionbase= new conexion();
   	  $conexionbase->constructor("localhost","root","123456","panaderia");
      $conexionbase->conectar();
   	  $conexionbase->insertarcotizacion($fecha,$documento,$serial,$cantidad,$precio);
      echo "salio ese careculo";
   
 }

   function recolectar(){
    $documento=$_POST['documento'];
    $fecha=$_POST['fecha']; 
    $serial=$_POST['serial'];
    $cantidad=$_POST['cantidad'];
    $precio=$_POST['precio'];
    insertarcotizacion($fecha,$documento,$serial,$cantidad,$precio);
    }

    recolectar();

 ?>
