<?php

/**
 * Class UsuarioPDO
 *
 * Clase cuyos metodos hacen consultas a la tabla T_01Usuario de la base de datos
 * 
 * @author Nerea Álvarez Justel
 * @since 1.0
 * @copyright 21-01-2021
 * @version 1.0
 */
class UsuarioPDO{
    
    /**
     * Metodo validarUsuario()
     * 
     * Metodo que valida si existe un determinado usuario y password en la base de datos.
     * Si existe el usuario actualiza la ultima conexion y el numero de conexiones de ese usuario y lo devuelve.
     * Si no existe el usuario devuelve null.
     * 
     * @param string $codUsuario codigo del usuario
     * @param string $password password del usuario
     * @return null|\Usuario Si existe,un objeto de tipo Usuario con los datos de la base de datos. Si no existe null.
     */
    public static function validarUsuario($codUsuario, $password){
        $oUsuario = null; // inicializo la variable que tendrá el objeto de clase ususario en el caso de que se encuentre en la base de datos
        
        // comprueba que el usuario y el password introducido existen en la base de datos
        $consulta = "Select * from T01_Usuario where T01_CodUsuario=? and T01_Password=?";
        $passwordEncriptado=hash("sha256", ($codUsuario.$password)); // enctripta el password pasado como parametro
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codUsuario,$passwordEncriptado]); // guardo en la variabnle resultado el resultado que me devuelve la funcion que ejecuta la consulta con los paramtros pasados por parmetro
        
        if($resultado->rowCount()>0){ // si la consulta me devuleve algun resultado
            $oUsuarioConsulta = $resultado->fetchObject(); // guardo en la variable el resultado de la consulta en forma de objeto
            
            
            // actualiza la ultima fecha de conecion
            $consultaActualizacionFechaConexion = "Update T01_Usuario set T01_NumConexiones = T01_NumConexiones+1, T01_FechaHoraUltimaConexion=? where T01_CodUsuario=?";
            $resultadoActualizacionFechaConexion = DBPDO::ejecutaConsulta($consultaActualizacionFechaConexion, [time(),$codUsuario]);
            
            if($resultadoActualizacionFechaConexion){
                // instanciacion de un objeto Usuario con los datos del usuario
                $oUsuario = new Usuario($oUsuarioConsulta->T01_CodUsuario, $oUsuarioConsulta->T01_Password, $oUsuarioConsulta->T01_DescUsuario, $oUsuarioConsulta->T01_NumConexiones+1, $oUsuarioConsulta->T01_FechaHoraUltimaConexion, $oUsuarioConsulta->T01_Perfil, $oUsuarioConsulta->T01_ImagenUsuario);
            }
        }
        
        return $oUsuario;
    }
}

