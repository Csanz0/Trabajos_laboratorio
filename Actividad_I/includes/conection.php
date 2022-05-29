<?php 

    $dataBase = new PDO("sqlite:" . __DIR__ . "/itinerarioDeLibros.db");

    $dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $table = "CREATE TABLE IF NOT EXISTS libros(
        nombre VARCHAR(100) NOT NULL,
        comentario VARCHAR(500) NOT NULL)";

    $result = $dataBase->exec($table);

    // echo "Tabla creada correctamente";

?>