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


if (isset($_REQUEST['volverInicio'])) { // si se ha pulsado el boton de registrarse
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del registro
    
    header('Location: index.php');
    exit;
}


$oUsuarioControlador = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'];

$numConexiones = $oUsuarioControlador->getNumConexiones(); // variable que tiene el numero de conexiones sacado de la base de datos
$descUsuario = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO']->getDescUsuario(); // variable que tiene la descripcion del usuario sacado de la base de datos
$ultimaConexion = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO']->getFechaHoraUltimaConexion();
$imagenUsuario = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO']->getImagenPerfil();

if(isset($_REQUEST['guardarCambio'])) { // si se ha pulsado el botón de guardar cambios
    
    $oUsuarioNuevo = UsuarioPDO::modificarUsuario($codUsuario, $_REQUEST['descUsuario']); //modificamos los datos del usuario
    if(!is_null($oUsuarioNuevo)) { //si la modificación se realiza correctamente
        $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'] = $oUsuarioNuevo; //guardamos el nuevo objeto usuario en la sesión
    }
    $_SESSION['paginaEnCurso'] = $aControladores['inicio']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}


$vista = $vistas['perfil'];//Se carga en la sesión de vistas, la que queremos
require_once $vistas['layout'];//se incluye la vista que contiene la $vista

?> 
    