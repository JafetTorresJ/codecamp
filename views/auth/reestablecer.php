<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Coloca tu nuevo password</p>
          
  <?php

  require_once __DIR__ . '/../templates/alertas.php';

  ?>
  <?php if($token_valido) { ?>

    <form  method="POST" class="formulario" >
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Tu nuevo password</label>
            <input type="password" class="formulario__input" placeholder="password" id="password" name="password">

        </div>
       
        <input type="submit" class="formulario__submit" value="guardar password">
           
        </form>
        <?php }?>
        <div class="acciones">
            <a href="/registro" class="acciones__enlace">¿Aun no tienes cuenta? Obtener una</a>
            <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Inicia sesion</a>
        </div>
    
</main>
