<?php include 'includes/header.php';

// Conectar a la BD con MySQLI
$db = new mysqli('localhost', 'root', 'Mindfulnes2018*', 'bienesraices_crud');

// Consulta
$query = "SELECT titulo, imagen FROM propiedades ORDER BY id;";
// $resultado = $db->query($query);

// while($row = $resultado->fetch_assoc()):
//   echo "<pre>";
//   var_dump($row);
//   echo "<pre>";
// endwhile;

// Preparamos la sentencia
$stmt = $db->prepare($query);

// Ejecutamos la sentencia
$stmt->execute();

// Creamos la bariable
$stmt->bind_result($titulo, $imagen);

// Asignamos la variable al resultado
//$stmt->fetch();

// Imprimimos el resultado
//var_dump($titulo);
//var_dump($imagen);

echo "<hr>";
while($stmt->fetch()):
  var_dump($titulo);
  echo "<hr>";
endwhile;



include 'includes/footer.php';