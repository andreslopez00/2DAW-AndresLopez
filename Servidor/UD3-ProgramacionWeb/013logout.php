<?php
 /*013logout.php: vacía la sesión y nos lleva de nuevo al formulario de inicio de sesión.
No contiene código HTML 0,5pts*/
session_start();
session_unset();
session_destroy();
header("Location: 010index.php");
exit();
