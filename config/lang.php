<?php

if (isset($_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'])) {
    $usuarioActual = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'];
}

$aLang = [
    //Idioma en ESPAÑOL
    'es' => [
        //Muestra de información
        'user' => 'Usuario',
        'description' => 'Descripción',
        'password' => 'Contraseña',
        'confirmPassword' => 'Repite la contraseña',
        'NumConex' => 'Número de conexiones',
        'DateLastConex' => 'Fecha de la última conexión',
        'typeUser' => 'Tipo de usuario',
        
        //Botones ENTRADA
        'login' => 'Inicio Sesion',
        'signup' => 'Registrate',
        'edit' => 'Editar',
        'logoff' => 'Cerrar Sesion',
        'delete'=> 'Borrar Cuenta',
        
        //Titulos
        'loginT' => 'App Logging Logout',
        'startT'=> 'Inicio',
        'signupT'=> 'Registro',
        'editProfileT' => 'Editar Perfil',
        'deleteT'=> 'Borrar Cuenta',
        
        //Muestra INICIO
        'welcome' => 'Bienvenido/a ' . (isset($usuarioActual) ? $usuarioActual->getDescUsuario() : null),
        'numConnections' => 'Se ha conectado ' . (isset($usuarioActual) ? $usuarioActual->getNumConexiones() : null) . ' veces',
        'numConnectionsWelcome' => 'Esta es la primera vez que se conecta',
        'lastConnection' => 'Última conexión: ' . (isset($usuarioActual) ? date('d/m/Y H:i:s', $usuarioActual->getFechaHoraUltimaConexion()) : null),
        
        //Botones movimiento
        'acceptB'=>'Aceptar',
        'cancelB' => 'Cancelar'
    ],
    //Idioma en INGLÉS
    'en' => [
        //Muestra de información
        'user' => 'User',
        'description' => 'Description',
        'password' => 'Password',
        'confirmPassword' => 'Repeat the password',
        'NumConex' => 'Number of connections',
        'DateLastConex' => 'Date of last connection',
        'typeUser' => 'Type of user',
        
        //Botones ENTRADA
        'login' => 'Login',
        'signup' => 'Sign up',
        'edit' => 'Edit',
        'logoff' => 'Logoff',
        'delete'=> 'Delete account',
        
        //Titulos
        
        'loginT' => 'App Logging Logout',
        'startT'=> 'Start',
        'signupT'=> 'Registration',
        'editProfileT' => 'Edit Profile',
        'deleteT'=> 'Delete Account',
        
        //Muestra INICIO
        'welcome' => 'Welcome ' . (isset($usuarioActual) ? $usuarioActual->getDescUsuario() : null),
        'numConnections' => 'You have connected ' . (isset($usuarioActual) ? $usuarioActual->getNumConexiones() : null) . ' times',
        'numConnectionsWelcome' => 'This is the first time you connect',
        'lastConnection' => 'Last connection: ' . (isset($usuarioActual) ? date('d/m/Y H:i:s', $usuarioActual->getFechaHoraUltimaConexion()) : null),
        
        //Botones movimiento
        'acceptB'=>'Accept',
        'cancelB' => 'Cancel'
    ]
];
?>