<header class="titulo">
    <h1><?php echo $aLang[$_COOKIE['idioma']]['loginT']; ?></h1> <!-- peticion del titulo-->
</header>
<main>
    <form id="login" class="enter" name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <!-----------------USUARIO----------------->
        <div>
            <label for="CodUsuario"><?php echo $aLang[$_COOKIE['idioma']]['user']; ?></label>
            <input class="required" type="text" id="CodUsuario" name="CodUsuario" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['user']; ?>" value="<?php
            echo (isset($_REQUEST['CodUsuario'])) ? $_REQUEST['CodUsuario'] : null;
            ?>">
        </div>
        <br>
        <!-----------------CONTRASEÑA----------------->
        <div>
            <label for="Password"><?php echo $aLang[$_COOKIE['idioma']]['password']; ?></label>
            <input class="required" type="password" id="Password" name="Password" value="<?php
            echo (isset($_REQUEST['Password'])) ? $_REQUEST['Password'] : null;
            ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['password']; ?>">
        </div>
        <br>
        <div>
            <button class="button" type="submit" name="iniciarSesion"><?php echo $aLang[$_COOKIE['idioma']]['login']; ?></button>    
            <button class="button" type="submit" name="registrarse"><?php echo $aLang[$_COOKIE['idioma']]['signup']; ?></button> 
        </div>

    </form>

    <form class="botones" name="formularioIdioma" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">                      
        <button <?php echo ($_COOKIE['idioma'] == "es")?> class="idioma" type="submit" name="idiomaElegido" value="es" ><img src="webroot/media/images/espanol.png" name="idiomaElegido" value="es" alt="Español" width="35" class="icono_es"/></button>
        <button <?php echo ($_COOKIE['idioma'] == "en") ?> class="idioma" type="submit" name="idiomaElegido" value="en" ><img src="webroot/media/images/ingles.png" name="idiomaElegido" value="en" alt="Inglés" width="35" class="icono_en"/></button>
    </form>
</main>