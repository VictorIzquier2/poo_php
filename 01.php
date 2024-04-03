<?php include 'includes/header.php';

// Crear una clase 
class Producto {
  public function __construct(public string $nombre, public float $precio, public bool $disponible)
  {   
  }
  public function mostrarProducto(){

    echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
  }
}

$producto = new Producto('Tablet', 200.00, true);
// $producto->nombre = 'Tablet';
// $producto->precio = 200.00;
// $producto->disponible = true;

$producto->mostrarProducto();

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 300.00, true);
// $producto2->nombre = 'Monitor Curvo';
// $producto2->precio = 300.00;
// $producto2->disponible = true;

$producto2->mostrarProducto();

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';