<?php
    //print_r($_POST);
    // verificamos que no esten vacíos los campos del formulario.
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtApellido"]) || empty($_POST["txtCorreo"]) || empty($_POST["txtDni"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include 'validarForm.php';

    include_once 'model/conexion.php';
    $nombre = $_POST["txtNombre"];
    $apellido = $_POST["txtApellido"];
    $correo = $_POST["txtCorreo"];
    $dni = $_POST["txtDni"];
    
    $sentencia = $bd->prepare("INSERT INTO usuario(nombre,apellido,correo,dni) VALUES (?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$apellido,$correo,$dni]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>