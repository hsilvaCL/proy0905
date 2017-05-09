<?php
include ('lib/Producto.php');

$oProducto1=new Producto();
$oProducto1->nombre="Nuevo Producto";
$oProducto1->codigo="001";

$oProducto2=new Producto("Nuevo Producto 002",0,"002");
$oProducto3=new Producto("Nuevo Producto 003",0,"003");


$aProductos[0]=$oProducto1;
$aProductos[1]=$oProducto2;
$aProductos[2]=$oProducto3;


?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        foreach ($aProductos as $oPro){
          echo $oPro->codigo." ".$oPro->nombre;
          echo "<br>";
        }
        ?>
    </body>
</html>
