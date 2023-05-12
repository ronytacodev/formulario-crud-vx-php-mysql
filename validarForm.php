<?php
    // verificamos que solo se ingresen letras en Nombres y Apellidos.
    $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";

    if( !preg_match($patron_texto, trim($_POST['txtNombre'])) || !preg_match($patron_texto, trim($_POST['txtApellido']))) {
        header('Location: index.php?mensaje=nombreApellidoErroneo');
        exit();
    }

    // verificamos que el DNI solo tenga 8 dígitos.
    if(strlen($_POST["txtDni"]) != 8){
        header('Location: index.php?mensaje=dniErroneo');
        exit();
    }
?>