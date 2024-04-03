<?php include 'includes/header.php';

/* CLASE ABSTRACTA */
abstract class Transporte {
  public function __construct(protected int $ruedas, protected int $capacidad) {

  }
  public function getInfo() : string {
    return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas.";
  }
}

class Bicicleta extends Transporte {

  public function getInfo() : string {
    return "La bicicleta tiene " . $this->ruedas . " ruedas, una capacidad de " . $this->capacidad . " personas y NO GASTA GASOLINA.";
  }

}

class Automovil extends Transporte {
  public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision) {
  }
    public function getInfo() : string {
    return "El automovil tiene " . $this->ruedas . " ruedas, una capacidad de " . $this->capacidad . " personas y transmisión " . $this->transmision;
    }

}

// $transporte = new Transporte(2,2);
// echo $transporte->getInfo();

// echo "<hr>";

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();

echo "<hr>";

$auto = new Automovil(4, 4, 'Manual');
echo $auto->getInfo();

echo "<hr>";

include 'includes/footer.php';