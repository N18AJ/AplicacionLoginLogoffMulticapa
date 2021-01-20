<header>
    <h1>Editar</h1>
</header>
<main class="flex-container-align-item-center">

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

        <div class="form-group">
            <label for="CodUsuario" style="display: inline-block;">Usuario</label>
            <input class="form-control" disabled type="text" name="CodUsuario" id="CodUsuario" aria-describedby="CodUsuario" value="<?php echo $aDatosUsuarioVista['codigo']; ?>">
        </div>
        <div class="form-group">
            <label for="descUsuario">Descripción</label>
            <input class="form-control" type="text" name="descUsuario"  id="descUsuario" aria-describedby="CodUsuario" value="<?php echo $aDatosUsuarioVista['descUsuario']; ?>">
        </div>
        <div class="form-group">
            <label for="sel1">Perfil</label>
            <select disabled name="perfil" class="form-control" id="sel1">
                <option value="<?php echo $aDatosUsuarioVista['perfil']; ?>"><?php echo $aDatosUsuarioVista['perfil']; ?></option>
            </select>
        </div>
        <div class="form-group">
            <label for="numConUsuario">Veces conectado</label>
            <input class="form-control" disabled type="text" name="numConUsuario" id="numConUsuario" aria-describedby="numConUsuario" value="<?php echo $aDatosUsuarioVista['contadorAccesos']; ?>">
        </div>
        <div class="form-group">
            <label for="ultimaConexion">Conexión anterior</label>
            <input class="form-control" disabled type="text" name="ultimaConexion" id="ultimaConexion" aria-describedby="ultimaConexion" value="<?php echo $aDatosUsuarioVista['ultimaConexion']; ?>">
        </div>

        <input type="submit" name="guardar" style="width: 100px;" class="button" value="Guardar">
        <input type="submit" name="volver" style="width: 100px;" class="button" value="Volver">
        <input type="submit" name="borrar" style="width: 120px;" class="button" value="Borrar cuenta">

    </form>
</main>