<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="col-4 p-3 m-auto">
        <?php
        ?>
        <div class="mb-3">
            <label for="nombre-director" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre-director">

        </div>
        <div class="mb-3">
            <label for="apellidos-director" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellidos-director">

        </div>
        <div class="mb-3">
            <label for="titulo-pelicula" class="form-label">Título de la pelicula</label>
            <input type="text" class="form-control" name="titulo-pelicula">
        </div>

        <div class="mb-3">
            <label for="genero-pelicula" class="form-label">Género</label>
            <input type="text" class="form-control" name="genero-pelicula">
        </div>

        <div class="mb-3">
            <label for="ano-pelicula" class="form-label">Año de estreno</label>
            <input type="number" class="form-control" name="ano-pelicula" min="1895">
        </div>

        <button type="submit" class="btn btn-primary" name="btnEnviar" value="ok">Enviar</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>
</body>

</html>