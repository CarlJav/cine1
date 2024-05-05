<?php
    require('Database.class.php');

    class Pelicula{
        public static function create_pelicula($nombre,$estreno,$director,$estudio){
            $database= new Database();
            $conn=$database->getConnection();

            $stmt= $conn->prepare('INSERT INTO pelicula(nombre_pelicula,estreno,director,estudio)
                    VALUES(:nombre,:estreno,:director,:estudio)');
            
            $stmt->bindParam(':nombre',$nombre);
            $stmt->bindParam(':estreno',$estreno);
            $stmt->bindParam(':director',$director);
            $stmt->bindParam(':estudio',$estudio);

            if ($stmt->execute()) {
                header('HTTP/1.1 201 pelicula creada correctamente');
                echo("Creado correctamente");
            }else{
                header('HTTP/1.1 401 pelicula no se ha creada correctamente');
                echo("fall al crear ");
            }

        }
        public static function delete_pelicula($id){
            $database= new Database();
            $conn=$database->getConnection();

            $stmt= $conn->prepare('DELETE FROM pelicula WHERE id=:id');

            $stmt->bindParam(':id',$id);
            
            if ($stmt->execute()) {
                header('HTTP/1.1 201 la pelicula se borro exitosamente');
            }else{
                header('HTTP/1.1 401 la pelicula nose pudo borrar');
            }
        }
        public static function get_all_peliculas(){
            $database = new Database();
            $conn = $database->getConnection();
        
            $stmt = $conn->prepare('SELECT * FROM pelicula');
        
            if ($stmt->execute()) {
                $result = $stmt->fetchAll();
                header('HTTP/1.1 202 ok');
                echo json_encode($result);
                return json_encode($result);
            } else {
                header('HTTP/1.1 401 fallo');
                echo "Error en el listado";
            }
        }


        public static function update_pelicula($id, $nombre, $estreno, $director,$estudio){
            $database = new Database();
            $conn = $database->getConnection();
        
            $stmt = $conn->prepare('UPDATE pelicula SET nombre_pelicula=:nombre_pelicula, estreno=:estreno, director=:director, estudio=:estudio WHERE id=:id');
        
            $stmt->bindParam(':nombre_pelicula', $nombre);
            $stmt->bindParam(':estreno', $estreno);
            $stmt->bindParam(':director', $director);
            $stmt->bindParam(':estudio', $estudio);
            $stmt->bindParam(':id', $id);
        
            if ($stmt->execute()) {
                header('HTTP/1.1 201 la pelicula se actualizo correctamente');
            } else {
                header('HTTP/1.1 401 la pelicula no se pudo actualizar');
            }
        }
        
        
    }


?>