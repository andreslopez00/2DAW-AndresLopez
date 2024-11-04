<?php
 /*011login.php: hace de controlador, por lo que debe comprobar los datos recibidos
(solo permite la entrada de usuario/usuario y si todo es correcto, ceder el control a la
vista del siguiente ejercicio. No contiene código HTML. 1pt*/
session_start();

if ($_POST['username'] === 'usuario' && $_POST['password'] === 'usuario') {
    $_SESSION['logged_in'] = true;
    $_SESSION['peliculas'] = ['Casino', 'Batman', 'El Irlandés'];
    $_SESSION['series'] = ['Juego de Tronos', 'Prison Break', 'Succesion'];
    header("Location: 012peliculas.php");
    exit();
} else {
    $_SESSION['error'] = "Usuario o contraseña incorrectos";
    header("Location: 010index.php");
    exit();
}
