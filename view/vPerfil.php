<?php
if(isset($_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'])){
    $usuarioActual = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'];
}
?>

<header>
    <h1>Editar</h1>
    
    <div class="buttons-header-inicio">
    
        <form name="logout" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <button class="logout" type="submit" name='cerrarSesion'><?php echo $aLang[$_COOKIE['idioma']]['logoff']; ?></button>
        </form>
    </div>
    
</header>
           
<main class="main-container-inicio" class="flex-container-align-item-center">
    <article>
        <label for="CodUsuario" class="labelEditar"><?php echo $aLang[$_COOKIE['idioma']]['user']; ?></label>
        <input class="required" disabled type="text" id="CodUsuario" name="CodUsuario" value="<?php echo $usuarioActual->getCodUsuario()?>">
        <br>
        <label for="DescUsuario" class="labelEditar"><?php echo $aLang[$_COOKIE['idioma']]['description']; ?></label>
        <input class="required" type="text" id="DescUsuario" name="DescUsuario" value="<?php echo $usuarioActual->getDescUsuario()?>">
        <br>
        <label for="TipoUsuario" class="labelEditar"><?php echo $aLang[$_COOKIE['idioma']]['typeUser']; ?></label>
        <input class="required" disabled type="text" id="TipoUsuario" name="TipoUsuario" value="<?php echo $usuarioActual->getPerfil()?>">
        <br>
        <label for="NumConexiones" class="labelEditar"><?php echo $aLang[$_COOKIE['idioma']]['numConn']; ?></label>
        <input class="required" disabled type="text" id="NumConexiones" name="NumConexiones" value="<?php echo $usuarioActual->getNumConexiones()?>">
        <br>
        <label for="FechaUltimaConexion" class="labelEditar"><?php echo $aLang[$_COOKIE['idioma']]['lastConn']; ?></label>
        <input class="required" disabled type="text" id="FechaUltimaConexion" name="FechaUltimaConexion" value="<?php echo date('d/m/Y H:i:s',$usuarioActual->getFechaHoraUltimaConexion())?>">
    </article>
        
        <form name="logout" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <button class="button" type="submit" name="guardarCambio"><?php echo $aLang[$_COOKIE['idioma']]['saveB']; ?></button>
            <button class="button" type="submit" name="volverInicio"><?php echo $aLang[$_COOKIE['idioma']]['returnB']; ?></button>
        </form>
        
</main>