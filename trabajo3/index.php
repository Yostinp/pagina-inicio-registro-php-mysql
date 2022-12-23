<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <title>inicio sesion</title>
</head>

<body>
    <div class="card">
        <div class="contenedor">
            <div class="login">
                <img src="img/logo.jpg" alt="">
            </div>
        </div>

        <div>
            <form class="form" method="post" action="">
                <?php
                include('src/login.php');
                ?>
                <label class="label-form" for="">
                    <img src="img/user.svg" alt="">
                    <input type="text" name="usuario" placeholder="usuario"> 
                </label>
                <label class="label-form" for="">
                    <img src="img/candado.png" alt="">
                    <input type="password" name="password" placeholder="password">
                </label>
                <div class="registro-form">
                    <p>no tienes cuenta? <a href="src/registro_u.php">registrate</a></p>
                </div>
                <input id="enviar" type="submit" name="enviar" value="ingresar">
            </form>
        </div>

    </div>

    <script>
        const $boton = document.getElementById('enviar')
        function name(params) {
            
        }

    </script>
</body>

</html>