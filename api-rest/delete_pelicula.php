<?php
    require('../includes/Pelicula.class.php');

    if ($_SERVER['REQUEST_METHOD'] =='DELETE' && isset($_GET['id'])) {
       
       
        Pelicula::delete_pelicula($_GET['id']);
        
    }


?>