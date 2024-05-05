<?php
    require('../includes/Pelicula.class.php');

    if ($_SERVER['REQUEST_METHOD'] =='GET' ) {
          
        Pelicula::get_all_peliculas();
        
    }


?>