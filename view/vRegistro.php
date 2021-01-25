<header class="titulo">
    <h1><?php echo $aLang[$_COOKIE['idioma']]['signupT']; ?></h1> <!-- peticion del titulo-->
</header>
<main>

    <form name="singup" id="login" class="enter" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        
        <!-----------------USUARIO----------------->
        <div>
            <label for="CodUsuario"><?php echo $aLang[$_COOKIE['idioma']]['user']; ?></label>
            <input class="required" type="text" id="CodUsuario" name="CodUsuario" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['user']; ?>" value="<?php
            echo (isset($_REQUEST['CodUsuario'])) ? $_REQUEST['CodUsuario'] : null; ?>">
        </div>
        <?php
        echo ($aErrores['CodUsuario'] != null) ? "<span style='color:#FF0000'>" . $aErrores['CodUsuario'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
        ?>
        <br>
        <!-----------------DESCRIPCIÓN----------------->
        <div>
            <label for="DescUsuario"><?php echo $aLang[$_COOKIE['idioma']]['description']; ?></label>
            <input class="required" type="text" id="DescUsuario" name="DescUsuario" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['description']; ?>" value="<?php
            echo (isset($_REQUEST['DescUsuario'])) ? $_REQUEST['DescUsuario'] : null; ?>">

        </div>
        <?php
        echo ($aErrores['DescUsuario'] != null) ? "<span style='color:#FF0000'>" . $aErrores['DescUsuario'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
        ?>
        <br>
        <!-----------------CONTRASEÑA----------------->
        <div>
            <label for="Password"><?php echo $aLang[$_COOKIE['idioma']]['password']; ?></label>
            <input class="required" type="password" id="Password" name="Password" value="<?php
            echo (isset($_REQUEST['Password'])) ? $_REQUEST['Password'] : null;
            ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['password']; ?>">
        </div>          
        <?php
        echo ($aErrores['Password'] != null) ? "<span style='color:#FF0000'>" . $aErrores['Password'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
        ?>
        <br>
        <!-----------------REPETIR CONTRASEÑA----------------->
        <div>
            <label for="PasswordConfirmacion"><?php echo $aLang[$_COOKIE['idioma']]['confirmPassword']; ?></label>
            <input class="required" type="password" id="PasswordConfirmacion" name="PasswordConfirmacion" value="<?php
            echo (isset($_REQUEST['PasswordConfirmacion'])) ? $_REQUEST['PasswordConfirmacion'] : null;
            ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['confirmPassword']; ?>">
        </div>          
        <?php
        echo ($aErrores['PasswordConfirmacion'] != null) ? "<span style='color:#FF0000'>" . $aErrores['PasswordConfirmacion'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
        ?>
        <br>
        <div class="registro">
            <button class="button" type="submit" name="Registrarse"><?php echo $aLang[$_COOKIE['idioma']]['signup']; ?></button>
            <button class="button" name="Cancelar"><?php echo $aLang[$_COOKIE['idioma']]['cancelB']; ?></button>
        </div>

    </form>
</main>

