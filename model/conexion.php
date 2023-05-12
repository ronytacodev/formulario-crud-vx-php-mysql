<?php
$contrasena = "";
$usuario = "root";
$nombre_bd = "formulario_crud_vx";

try {
    $bd = new PDO(
        'mysql:host=localhost:33065;
		dbname=' . $nombre_bd,
        $usuario,
        $contrasena,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (Exception $e) {
    echo "Problema con la conexion: " . $e->getMessage();
}
