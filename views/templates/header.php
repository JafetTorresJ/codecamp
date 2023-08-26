<header class="header">
    <div class="header__contenedor">
        <nav class="header__navegacion">

        <?php if(is_auth()) { ?>
            
            <?php if(is_admin()) {?>
                <a class="header__enlace" href="/admin/dashboard">Administrar</a>
                
                <?php }else{ ?>
                 <a class="header__enlace" href="/finalizar-registro">Finalizar Registro</a>
                 
                 <?php }?>
            <form method="POST" action="/logout"  class="header__form">
            <input type="submit" value="Cerrar Sesion" class="header__submit">
        </form>
         <?php }else{ ?>   

            <a href="/registro" class="header__enlace">Crea tu cuenta</a>
            <a href="/login" class="header__enlace">Iniciar sesion</a>
        <?php }?>
        
        </nav>
        <div class="header__contenido">
            <a href="/">
                <h1 class="header__logo">
                    &#60;Technological Workshop />
                </h1>
            </a>
            <p class="header__texto">Octubre 5 - 6 - 2023</p>
            <p class="header__texto header__texto--modalidad">En linea - Presencial</p>

            <a href="/registro" class="header__boton">Comprar Pase</a>
        </div>
    </div>

</header>
<div class="barra">
    <div class="barra__contenido">
 <a  href="">

 <h1 class="barra__logo">
 &#60;CodeCamp/>
 </h1>

 </a>
 <nav class="navegacion">
    <a href="/devwebcamp"class="navegacion__enlace <?php echo pagina_actual('/devwebcamp') ? 'navegacion__enlace--actual' : ''; ?>">Evento</a>
    <a href="/paquetes"class="navegacion__enlace <?php echo pagina_actual('/paquetes') ? 'navegacion__enlace--actual' : ''; ?>">Paquetes</a>
    <a href="/workshops-conferencias" class="navegacion__enlace <?php echo pagina_actual('/workshops') ? 'navegacion__enlace--actual' : ''; ?>">Workshops / Conferencias</a>
    <a href="/registro"class="navegacion__enlace <?php echo pagina_actual('/registro') ? 'navegacion__enlace--actual' : ''; ?>">Comprar pase</a>
 </nav>
    </div>
</div>