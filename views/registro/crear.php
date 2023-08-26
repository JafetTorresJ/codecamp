<main class="registro">
    <h2 class="registro__heading"><?php echo $titulo; ?></h2>
<p class="registro__descripcion">Elige tu plan</p>
<div data-aos="<?php aos_animation(); ?>" class="paquetes__grid">
        <div class="paquete">
        <h1 class="paquete__nombre">Pase Gratis</h1>
        <ul class="paquete__lista">
            <li class="paquete__elemento">Acceso Virtual a DevWebCamp</li>
        </ul>
        <p class="paquete__precio">$0</p>

        <form method="POST" action="/finalizar-registro/gratis">
           <input type="submit" class="paquetes__submit" type="submit" value="Inscripcion Gratis">
        </form>

        </div>
        <div class="paquete">
        <h1 class="paquete__nombre">Pase Presencial</h1>
        <ul class="paquete__lista">
            <li class="paquete__elemento">Acceso Presencial a DevWebCamp</li>
            <li class="paquete__elemento">Pase por 3 Dias</li>
            <li class="paquete__elemento">Acceso a talleres y conferencias</li>
            <li class="paquete__elemento">Acceso a las grabaciones</li>
            <li class="paquete__elemento">Camisa del evento</li>
            <li class="paquete__elemento">Comidaa y Bebida</li>
        </ul>
        <p class="paquete__precio">$199</p>
        <div id="smart-button-container">
    <div style="text-align: center;">
        <div id="paypal-button-container"></div>
    </div>
</div>

        </div>
        <div class="paquete">
        <h1 class="paquete__nombre">Pase Virtual</h1>
        <ul class="paquete__lista">
            <li class="paquete__elemento">Acceso Virtual a DevWebCamp</li>
            <li class="paquete__elemento">Pase por 3 Dias</li>
            <li class="paquete__elemento">Acceso a talleres y conferencias</li>
            <li class="paquete__elemento">Acceso a las grabaciones</li>

        </ul>
        <p class="paquete__precio">$49</p>
        <div id="smart-button-container">
    <div style="text-align: center;">
        <div id="paypal-button-container-virtual"></div>
        </div>
        
    </div>
</main>


<!-- Reemplazar CLIENT_ID por tu client id proporcionado al crear la app desde el developer dashboard) -->
<script src="https://www.paypal.com/sdk/js?client-id=AaIBEFt-KaorZ3cPA0XKCpPWHmMaeYWyRBuj66XjA6y3HQ4mZXRR0p7Fjo70laT_Rw6Z4wcHbja9asa1&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>

<script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'pay',
        },
 
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"1","amount":{"currency_code":"USD","value":199}}]
          });
        },
 
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
 
            // Full available details
           const datos = new FormData();
           datos.append('paquete_id', orderData.purchase_units[0].description);
           datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);
           
           fetch('/finalizar-registro/pagar', {
            method: 'POST',
            body: datos
           })
           .then( respuesta => respuesta.json())
           .then(resultado => {
            if(resultado.resultado){
                actions.redirect('http://localhost:3000/finalizar-registro/conferencias');
            }
           })

          });
        },
 
        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'pay',
        },
 
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"2","amount":{"currency_code":"USD","value":49}}]
          });
        },
 
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
 
            // Full available details
           const datos = new FormData();
           datos.append('paquete_id', orderData.purchase_units[0].description);
           datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);
           
           fetch('/finalizar-registro/pagar', {
            method: 'POST',
            body: datos
           })
           .then( respuesta => respuesta.json())
           .then(resultado => {
            if(resultado.resultado){
                actions.redirect('http://localhost:3000/finalizar-registro/conferencias');
            }
           })

          });
        },
 
        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container-virtual');
    }
 
    
 
  initPayPalButton();
</script>
