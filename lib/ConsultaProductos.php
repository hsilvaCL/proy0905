<?php
//include 'Producto';

class ConsultaProductos{
    
private function Conexion(){
     $miconn = new mysqli("localhost", "root", "avaras08", "ventas");
     if ($miconn->connect_errno) {
        return "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
     }
     return $miconn;  
}

    public function Lista(){
        $sql="SELECT * FROM productos";
        /*Uso del metodo conexión*/
        $resultado = $this->Conexion()->query($sql);
        /*Obtención de los elementos*/
        $i=0;
        while($fila = $resultado->fetch_assoc()){
          $oProducto= new Producto($fila["nombre"],$fila["precio"],$fila["codigo"]);
          $aProductos[$i]=$oProducto;

         }
         
         /*Se devuelve "retorna el arreglo de productos"*/
        return $aProductos;
    }
    
    
}
