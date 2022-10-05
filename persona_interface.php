<?php
//Interface
interface Persona {
 
    // Listado de metodos de la interface
    public function registro();
    public function get_dni();

}

//Clase que implementan la interfaz
class Teen implements Persona {
    
    protected $nombre;

    function __construct($name){
       $this->nombre = $name;
    }

    public function registro(){
        echo "Su registro esta procesado : ".$this->nombre." . Ud no puede aun votar \n";
    }
    public function get_dni(){
        echo "Ud. es menor de edad su DNI es amarillo ...\n";
    }

}

class Adulto implements Persona {
    protected $nombre;

    function __construct($name){
        $this->nombre = $name;
     }

    public function registro(){
        echo "Su registro esta procesado : ".$this->nombre." .Ud ya puede votar...\n";
    }
    public function get_dni(){
        echo "Ud. es menor de edad su DNI es azul ...\n";
    }
}

 /** Leccion : Puedo usar metodos con los mismos nombres 
 *  obteniendo distintos resultados. Esto es "polimorfismo".
 */

$julio  = new Teen("Julio Verne");
$nikola = new Adulto("Nikola Tesla");
$david  = new Adulto("David Gilbert");

$personajes = array($julio,$nikola,$david);

foreach($personajes as $personaje){

    
     $personaje->registro();  
     $personaje->get_dni();
}