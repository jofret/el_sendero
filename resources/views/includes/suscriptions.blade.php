<!-- newsletter widget
    --------------------------------------------
    SUSCRIPCIONES-------------------------------
    --------------------------------------------
     -->
    <div class="aside-widget">
      <div class="section-title">
        <h2 class="title">Suscripción</h2>
      </div>
      <div class="newsletter-widget" >

              <p>Recibí la Revista El Sendero en Casa</p>
              <button onclick="anadeClase()" class="primary-button">Subscribirme</button>
 
 
      </div>
    </div>
    <!-- 
    --------------------------------------------
    END SUSCRIPCIONES---------------------------
    --------------------------------------------
   
     /newsletter widget -->

  <script>
      function anadeClase() {
         var elem = document.getElementById("popup");

         elem.classList.remove("foo");
         elem.classList.add("flotante");

      }

      function removeClase(){
         var elem = document.getElementById("popup");

         elem.classList.remove("flotantefoo");
         elem.classList.add("foo");

      }

      
      function AgregarClase(){
        var opcionEncuesta = document.getElementsByClassName('radio');
        var i;
        for (i = 0; i < opcionEncuesta.length; i++) {
          opcionEncuesta[i].classList.add("activar");
        }
        var butonDis = document.getElementById("dis").disabled = false;
      }

      var butonDis = document.getElementById("dis").disabled = true;

  </script>
