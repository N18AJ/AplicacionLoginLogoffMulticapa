<header class="titulo">
    <h1><?php echo $aLang[$_COOKIE['idioma']]['deleteT']; ?></h1> <!-- peticion del titulo-->
</header>
<main>
    <form class="enter" name="edit" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <!-----------------USUARIO----------------->
        <div>
            <label for="CodUsuario"><?php echo $aLang[$_COOKIE['idioma']]['user']; ?></label>
            <input type="text" id="CodUsuario" name="CodUsuario" class="lectura" value="<?php echo $CodUser ?>" readonly>
        </div>
        <br>
        <!-----------------DESCRIPCIÓN----------------->
        <div>
            <label for="DescUsuario"><?php echo $aLang[$_COOKIE['idioma']]['description']; ?></label>
            <input type="text" id="DescUsuario" name="DescUsuario"  value="<?php echo $DescUser ?>" readonly/>
        </div>
        <br>
        <!-----------------PERFIL----------------->
        <div>
            <label for="Perfil"><?php echo $aLang[$_COOKIE['idioma']]['typeUser']; ?></label>
            <input type="text" id="Perfil" name="Perfil"  class="lectura"value="<?php echo $Profile ?>" readonly/>
        </div>
        <br>
        <!-----------------NÚMERO DE CONEXIONES----------------->
        <div>
            <label for="Conexiones"><?php echo $aLang[$_COOKIE['idioma']]['NumConex']; ?></label>
            <input type="number" id="Conexiones" name="Conexiones" value="<?php echo $ConexNumber ?>" readonly/>
        </div>
        <br>
        <!-----------------ÛLTIMA FECHA DE CONEXION----------------->
        <div>
            <label for="Ultima"><?php echo $aLang[$_COOKIE['idioma']]['DateLastConex']; ?></label>
            <input type="datetime" id="Ultima" name="Ultima" value="<?php echo $LastDateConex ?>" readonly/>
        </div>
        <br>
        <div>
            <button class="button" type="submit" name="Aceptar"><?php echo $aLang[$_COOKIE['idioma']]['acceptB']; ?></button>    
            <button class="button" type="submit" name="Cancelar"><?php echo $aLang[$_COOKIE['idioma']]['cancelB']; ?></button> 
        </div>

    </form>
</main>