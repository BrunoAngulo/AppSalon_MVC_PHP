<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reestable tu password con tu email</p>
<?php
    include_once __DIR__ . "/../templates/alertas.php";
?>
<form class="formulario" method="POST" action="/olvide">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Ingresa tu email" name="email">
    </div>
    <input type="submit" class="boton" value="Enviar instrucciones">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes cuenta?</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crea una</a>
</div>