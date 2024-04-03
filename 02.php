<?php include 'includes/header.php';

// Modificadores de acceso
class Producto {

  // Public - Se puede acceder y modificar en cualquier lugar (clase y objeto)
  // Protected - Se puede acceder unicamente en la clase 
  // Private - Solo miembros de la misma clase pueden acceder a él

  public function __construct(protected string $nombre, public float $precio, public bool $disponible)
  {   
  }
  public function mostrarProducto(){
    echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
  }
  public function getNombre(){
    return "<p>$this->nombre</p>";
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
}

$producto = new Producto('Tablet', 200.00, true);
// $producto->mostrarProducto();
$producto->setNombre('IPad');
echo $producto->getNombre();

// $producto->nombre = "Nuevo Nombre";
// echo $producto->nombre;

// echo "<pre>";
// var_dump($producto);
// echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 300.00, true);
// $producto2->mostrarProducto();
$producto2->setNombre('Monitor Plano');
echo $producto2->getNombre();

// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";

include 'includes/footer.php';