<?php include 'includes/header.php';

$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', 'Mindfulnes2018*');
var_dump($db);

$query = "SELECT titulo FROM propiedades;";

$propiedades = $db->query($query)->fetch();

var_dump($propiedades);

include 'includes/footer.php';