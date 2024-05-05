<?php
require('../includes/Pelicula.class.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nombre']) && isset($_POST['estreno']) && isset($_POST['director']) && isset($_POST['estudio'])) {
   
    Pelicula::create_pelicula($_POST['nombre'], $_POST['estreno'], $_POST['director'], $_POST['estudio']);
    
} else {
    echo "No se ingresaron todos los datos";
}
?>
