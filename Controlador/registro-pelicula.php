<?php
if (!empty($_POST["btnEnviar"])) {
    if (!empty($_POST["nombre-director"]) and !empty($_POST["apellidos-director"]) and !empty($_POST["titulo-pelicula"]) and !empty($_POST["genero-pelicula"]) and !empty($_POST["ano-pelicula"])) {
        $nombre = $_POST["nombre-director"];
        $apellidos = $_POST["apellidos-director"];
        $titulo = $_POST["titulo-pelicula"];
        $genero = $_POST["genero-pelicula"];
        $ano = $_POST["ano-pelicula"];

        $sql = $conexion->query(" insert into peliculas(nombre_director, apellidos_director, titulo_pelicula, genero_pelicula, estreno_pelicula) values('$nombre','$apellidos','$titulo','$genero','$ano')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Peli registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">No se pudo registrar!</div>';
        }
    }
    echo "Hay algún campo vacío";
}
