<?php

class Producto{
    var $nombre="";
    var $precio=0;
    var $codigo="";
    
    /*Constructor de la clase*/
    
    public function __construct($nombre="", $precio=0, $codigo="") {
        $this->nombre= $nombre;
        $this->precio= $precio;
        $this->codigo= $codigo;
    }
    
    public function totalUSD(){
        return $this->precio /680;        
    }
}
