<?php 

abstract class Persona {
    
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

    abstract protected function imc(); // Metodo abstracto a implementar
    
    public function get_dni() {     // Metodo a heredarse 
        echo "Registro del DNI ...";         
    }

    public function get_extremidades(){
        return 4;
    }
    
}

//Clase Adulta heredada desde la clase abstracta Persona.
class Adulto extends Persona {
    private $sexo;

    public function imc(){
        echo "Esto es el IMC ... \n";
    }

    public function get_sexo($sexo){
         $this->sexo = $sexo;
         echo "El sexo de ".$this->nombre." es : ".$this->sexo."\n";
    }
}

// Instanciacion de la clase hija Adulto para Mariaelena.

$mariaelena = new Adulto("Mariaelena",65 ,1.65 ,36);
$mariaelena->get_sexo("femenino");
$mariaelena->imc();
echo "El numero de extremidades es : ".$mariaelena->get_extremidades()."\n";

//Instanciacion de la clase Persona para Joaquin -> No se puede instanciar desde una clase abstracta.
$joaquin = new Persona("Joaquin",70 ,1.73 ,29);
echo "El numero de extremidades es : ".$joaquin->get_extremidades()."\n";

