<?php

class Persona {

    public static $nombre = "Issac Newton";

    public static function comer(){
   
       echo "Comio manzanas ...";
    }
}

//obteniendo los metodos y atributos estaticos
$name  = Persona::$nombre;
echo "Mi nombre es : ".$name."\n";
Persona::comer();

