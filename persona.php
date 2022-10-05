<?php
class Persona {
  
  // Atributos
  private $nombre;
  private $peso;
  private $talla;
  private $edad;


  // Metodos
  public function imc() {       
    echo "Esto es el IMC ... ";        
  }
  
  public function get_dni() {
    echo "Registro del DNI ...";         
  }
}

// Creando objetos Joaquin y Mariaelena.
  $joaquin    = new Persona();
  $mariaelena = new Persona(); 