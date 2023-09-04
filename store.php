<?php
        echo "<h2>Funciona con PHP</h2>";
        if(!empty($_POST['nombreIng']) && !empty($_POST['passwordIng'])){

          require ('conexion.php');

          $nombre = $_POST['nombreIng'];
          $correo = $_POST['correoIng'];
          $genero = $_POST['generoIng'];
          $password = $_POST['passwordIng'];
          $comentario = $_POST['comentariosIng'];
          $ciudad = $_POST['ciudadIng'];
          if(isset($_POST['respuestaIng'])){
            $respuesta = 1;
          }
          else{
            $respuesta = 0;
          }

          $sql = "INSERT INTO usuario (nombre, correo, genero,
          contrasenia, comentario, ciudad, respuesta) VALUES (
            '$nombre', '$correo', '$genero',
            '$password', '$comentario','$ciudad',
            '$respuesta')";
          
            $conn->exec($sql);
            header("Location: formulario.php");
        }
        else{
            echo "<h2>No funciona el INSERT...</h2>";
        }
?>