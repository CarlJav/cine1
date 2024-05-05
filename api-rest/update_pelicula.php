<?php
    require('../includes/Pelicula.class.php');

    if ($_SERVER['REQUEST_METHOD'] =='PUT' && isset($_GET['nombre']) && isset($_GET['estreno']) && isset($_GET['director']) && isset($_GET['id'])) {
       
        Pelicula::update_pelicula( $_GET['id'],$_GET['nombre'], $_GET['estreno'], $_GET['director'], $_GET['estudio']);
        
    }
?>
