<?php
class Persona {
  
  // Atributos
  private $nombre;
  private $peso;
  private $talla;
  private $edad;

  //Metodo constructor 
  function __construct($nombres,$pesos,$tallas,$edades) {
    $this->nombre = $nombres;
    $this->peso   = $pesos;
    $this->talla  = $tallas;
    $this->edad   = $edad;
  }
  
  // Metodos
  public function imc() {       
    echo "Esto es el IMC ... ";        
  }
  
  public function get_dni() {
    echo "Registro del DNI ...";         
  }
}

// Creando objetos Joaquin y Mariaelena.
  $joaquin    = new Persona("Joaquin",70 ,1.73 ,29);
  $mariaelena = new Persona("Mariaelena",65 ,1.65 ,36);