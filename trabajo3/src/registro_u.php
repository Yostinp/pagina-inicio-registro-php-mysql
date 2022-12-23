<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>registro</title>
</head>

<body>
    <div class="contenedor">
        <h2>REGISTRATE</h2>
        <?php
        include('registrar.php')
        ?>
        <div class="card-form">
            <form class="form" action="" method="post">
                <label class="label-form" for="">
                    <img src="../img/img-registro/user2.svg" alt="">
                    <input type="text" placeholder="nombre" name="nombre">
                </label>
                <label class="label-form" for="">
                    <img src="../img/img-registro/user2.svg" alt="">
                    <input type="text" placeholder="apellido" name="apellido">
                </label>
                <label class="label-form" for="">
                    <img src="../img/img-registro/email.svg" alt="">
                    <input type="email" placeholder="exmple@example.com" name="email">
                </label>
                <label class="label-form" for="">
                    <img src="../img/img-registro/user.svg" alt="">
                    <input type="text" placeholder="usuario" name="usuario">
                </label>
                <label class="label-form" for="">
                    <img src="../img/img-registro/candado.svg" alt="">
                    <input type="password" placeholder="password" name="password">
                </label>
                <div class="buton-form">
                    <button type="submit" name="añadir"> enviar
                    </button>
                    <div>
                        <a href="../index.php">regresar</a>
                    </div>
                    
                </div>

            </form>
        </div>
        <div class="card-img">
            <img src="" alt="">
        </div>
    </div>

</body>

</html>