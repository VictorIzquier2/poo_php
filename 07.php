<?php include 'includes/header.php';

/* POLIMORFISMO */
interface ITransporte{
  public function getInfo() : string;
  public function getRuedas(): int;
}

class Transporte implements ITransporte {
  public function __construct(protected int $ruedas, protected int $capacidad) {

  }
  public function getInfo() : string {
    return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas.";
  }

  public function getRuedas() : int {
    return $this->ruedas;
  }
}

class Automovil extends Transporte implements ITransporte {
  public function __construct(protected int $ruedas, protected int $capacidad, protected string $color) {

  }
  public function getInfo() : string {
    return "El automovil tiene " . $this->ruedas . " ruedas, una capacidad de " . $this->capacidad . " personas y es " . $this->color . ". ";
  }

  public function getColor() : string {
    return "El color es " . $this->color;
  }
}

echo "<pre>";
var_dump($transporte = new Transporte(8,20));
var_dump($auto = new Automovil(4,4,'Rojo'));
echo "</pre>";

$transporte = new Transporte(8,20);
$auto = new Automovil(4,4,'Rojo');

echo $transporte->getInfo();
echo $auto->getInfo();
echo $auto->getColor();

include 'includes/footer.php';