<?php include 'includes/header.php';

// Metodos estáticos 
class Producto {

  public $imagen;
  public static $imagenPlaceholder = "Imagen.jpg";

  public function __construct(protected string $nombre, public float $precio, public bool $disponible, string $imagen)
  {   
    if($imagen){ 
      self::$imagenPlaceholder = $imagen; 
    }
  }
  public static function obtenerProducto(){
    echo "<p>obteniendo datos del Producto...</p>";
  }
  public static function obtenerImagenProducto(){
    return "<p>Imagen del producto: " . self::$imagenPlaceholder . "</p>";
  }
  public function mostrarProducto(){
    echo "Producto: " . $this->nombre . " Precio: " . $this->precio . " Disponible: " . $this->disponible . " Imagen: " . $this->imagen;
  }
  public function getNombre(){
    return "<p>$this->nombre</p>";
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
}

echo Producto::obtenerProducto();

$producto = new Producto('Tablet', 200, true, '');
echo $producto->obtenerImagenProducto();

$producto2 = new Producto('Monitor Curvo', 300, false, 'monitorCurvo.jpg');
echo $producto->obtenerImagenProducto();

include 'includes/footer.php';