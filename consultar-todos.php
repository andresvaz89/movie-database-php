<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/46e50ba838.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-fluid row">
        <div class="col-4">
            <h3 class="text-center text-secondary">Registrar película</h3>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <?php
                include "Modelo/conexion.php";
                include "Controlador/registro-pelicula.php";
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
        <div class="col-8 p-4">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre director</th>
                        <th scope="col">Apellidos director</th>
                        <th scope="col">Título película</th>
                        <th scope="col">Género</th>
                        <th scope="col">Año de estreno</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "./Modelo/conexion.php";
                    $sql = $conexion->query(" SELECT * from peliculas ");
                    while ($datos = $sql->fetch_object()) {

                    ?>
                        <tr>

                            <?php $datos->id ?>
                            <td><?php echo $datos->nombre_director ?></td>
                            <td><?php echo $datos->apellidos_director ?></td>
                            <td><?php echo $datos->titulo_pelicula ?></td>
                            <td><?php echo $datos->genero_pelicula ?></td>
                            <td><?php echo $datos->estreno_pelicula ?></td>

                            <td>
                                <a href="http://localhost/xampp/peliculas-directores-PDO/modificar-peliculas.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>


                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>