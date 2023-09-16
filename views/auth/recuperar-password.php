<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Coloca el nuevo password</p>
<?php
    include_once __DIR__ . "/../templates/alertas.php";
?>
<?php if ($error) return null; ?>
<form class="formulario" method="POST">
<div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Ingresa tu password" name="password">
    </div>
    <input type="submit" class="boton" value="Nuevo Password">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesion</a>
    <a href="/olvide">¿Crear cuenta?</a>
</div>