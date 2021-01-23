<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modal</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,100;0,200;0,300;1,400&display=swap" rel="stylesheet">
</head>

<body>
    <form action="correo.php" method="POST">
        <div class="form">
            <h1>Contactame</h1>
            <div class="grupo">
                <input type="text" name="name" id="" required><span class="barra"></span>
                <label>Nombre y Apellido</label>
            </div>
            <div class="grupo">
                <input type="email" name="email" id="" required><span class="barra"></span>
                <label>Email</label>
            </div>
            <div class="grupo">
                <textarea name="detalles" id="" rows="3" required></textarea><span class="barra"></span>
                <label>Detalles</label>
            </div>

            <button type="submit" name="enviar">ENVIAR</button>
        </div>
    </form>
    <?
    include("correo.php");
    ?>
</body>

</html>