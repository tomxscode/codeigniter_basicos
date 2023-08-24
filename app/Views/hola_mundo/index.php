<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo</title>
</head>

<body>
    <h1>Hola desde CodeIgniter</h1>
    <p><?php echo $mensaje_p; ?></p>

    <!-- capturar desde un input -->
    <form action="./hola-mundo/capturar" method="post">
        <input type="text" name="captura_input">
        <button type="submit">Capturar</button>
    </form>
</body>

</html>