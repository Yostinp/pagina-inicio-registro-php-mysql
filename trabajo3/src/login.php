<?php

include("conexion.php");

if (isset($_POST['enviar'])) {
    $usuario_u = $_POST['usuario'];
    $password_u = $_POST['password'];
    if (empty($usuario_u) or
        empty($password_u)) {
        ?>
            <p class="error">todos los campos son obligatorios</p>
        <?php
    } else {
        $sql = "SELECT `usuario`, `password` FROM `usuarios`
                    WHERE usuario = '$usuario_u' AND password = '$password_u'";
        $query = mysqli_query($conexion, $sql);

        if ($query) {
            ?>
            <div class="correcto">
                <p >ininiciando sesion</p>
            </div>
            <?php
        } else {
            ?>
            <div class="error">
                <p >error contraseña o usuario incorrecto</p>
            </div>
            <?php
        }
    }

}
?>