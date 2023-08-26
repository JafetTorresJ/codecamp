<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?>   </h2>
    <p class="devwebcamp__descripcion">Conoce el evento tecnologico mas importante de la region</p>
     
    <div class="devwebcamp__grid">
        <div data-aos="<?php aos_animation(); ?>" class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" widht="200" src="build/img/sobre_devwebcamp.jpg"  alt="Imagen Evento">

            </picture>
        </div>

        <div data-aos="<?php aos_animation(); ?>" class="devwebcamp__contenido">
            <p data-aos="<?php aos_animation(); ?>" class="devwebcamp__texto">
Evento Tecnológico Imperdible!
Únete a nosotros en nuestro emocionante evento sobre las tecnologías de programación más demandadas y actuales. 
¡Una oportunidad única para mantenerse al día con las tendencias más candentes del mundo de la programación!


En este evento, reuniremos a expertos líderes en la industria tecnológica para explorar las tecnologías de programación más solicitadas y relevantes en el panorama actual. 
Desde lenguajes de programación populares hasta frameworks y herramientas avanzadas, nuestro objetivo es brindarte una visión completa de lo que está impulsando la innovación en la programación.
            </p>
     
        </div>

    </div>

</main>