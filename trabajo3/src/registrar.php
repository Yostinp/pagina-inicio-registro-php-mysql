<?php

include('conexion.php');

if(isset($_POST['añadir'])){
    $nombre_u = $_POST['nombre'];
    $apellido_u = $_POST['apellido'];
    $email_u = $_POST['email'];
    $usuario_u = $_POST['usuario'];
    $password_u = $_POST['password'];
    if(empty($nombre_u) or  
        empty($apellido_u) or
        empty($email_u) or
        empty($usuario_u) or
        empty($password_u)){
            ?>
            <div class="error">
                <p>todos los campos son obligatorio</p>
            </div>
            
            <?php
        }
        else{
        $sql = "INSERT INTO usuarios (nombre,apellido,correo,usuario,password)
                        VALUE ('$nombre_u','$apellido_u','$email_u','$usuario_u','$password_u')";
        $query = mysqli_query($conexion, $sql);

        if($query){
            ?>
            <div class="correcto">
                <p>cuenta registrada</p>
            </div>
            <?php
        }
        else{
            ?>
            <div class="error">
                <p>no se pudo registrar cuenta</p>
            </div>
            <?php
        }
        }

}



?>