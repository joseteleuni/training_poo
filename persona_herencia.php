<?php

//Clase padre Persona
class Persona {
  
  // Atributos
  protected $nombre;
  protected $peso;
  protected $talla;
  protected $edad;

  //Metodo constructor 
  function __construct($nombres,$pesos,$tallas,$edades) {
    $this->nombre = $nombres;
    $this->peso   = $pesos;
    $this->talla  = $tallas;
    $this->edad   = $edades;
  }
  
  // Metodos
  public function imc() {       
    echo "Esto es el IMC ... ";        
  }
  
  public function get_dni() {
    echo "Registro del DNI ...";         
  }
}

// La clase Adulto heredada desde la clase Persona.

class Adulto extends Persona {
    private $sexo;

    public function get_sexo($sexo){
         $this->sexo = $sexo;
         echo "El sexo de ".$this->nombre." es : ".$this->sexo;
    }
}

// Instanciacion de la clase hija Adulto.
$mariaelena = new Adulto("Mariaelena",65 ,1.65 ,36);
$mariaelena->get_sexo("femenino");