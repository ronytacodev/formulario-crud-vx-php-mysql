<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
    }

    include 'validarForm.php';
    
    include 'model/conexion.php';
    $codigo = $_POST['codigo'];
    $nombre = $_POST['txtNombre'];
    $apellido = $_POST['txtApellido'];
    $correo = $_POST['txtCorreo'];
    $dni = $_POST['txtDni'];

    $sentencia = $bd->prepare("UPDATE usuario SET nombre = ?, apellido = ?, correo = ?, dni = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre, $apellido, $correo, $dni, $codigo]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>