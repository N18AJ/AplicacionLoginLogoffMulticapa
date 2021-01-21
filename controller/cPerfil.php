<?php
if(!isset($_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'])){ // si no se ha logueado le usuario
    header('Location: index.php'); // redirige al login
    exit;
}

if (isset($_REQUEST['cerrarSesion'])) { // si se ha pulsado el boton de Cerrar Sesion
    session_destroy(); // destruye todos los datos asociados a la sesion
    header("Location: index.php"); // redirige al login
    exit;
}

if (isset($_REQUEST['guardar'])) { // si se ha pulsado el boton de registrarse
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del registro
    
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['volver'])) { // si se ha pulsado el boton de registrarse
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del registro
    
    header('Location: index.php');
    exit;
}
$oUsuarioControlador = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'];

$numConexiones = $oUsuarioControlador->getNumConexiones(); // variable que tiene el numero de conexiones sacado de la base de datos
$descUsuario = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO']->getDescUsuario(); // variable que tiene la descripcion del usuario sacado de la base de datos
$ultimaConexion = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO']->getFechaHoraUltimaConexion();
$imagenUsuario = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO']->getImagenPerfil();

$vista = $vistas['perfil'];//Se carga en la sesión de vistas, la que queremos
require_once $vistas['layout'];//se incluye la vista que contiene la $vista

?> 
    