<?php include 'includes/templates/header.php'?>


    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpg">
            <img loading="lazy" width="200" height="300" src="build/img/destacada.jpg" alt="imagen casa con piscina">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                  <img
                  class="icono"
                    loading="lazy"
                    src="build/img/icono_wc.svg"
                    alt="icono wc"
                  />
                  <p>3</p>
                </li>
                <li>
                  <img
                  class="icono"
                    loading="lazy"
                    src="build/img/icono_estacionamiento.svg"
                    alt="icono estacionamiento"
                  />
                  <p>3</p>
                </li>
                <li>
                  <img
                  class="icono"
                    loading="lazy"
                    src="build/img/icono_dormitorio.svg"
                    alt="icono habitaciones"
                  />
                  <p>3</p>
                </li>
              </ul>
              <p>Est sit excepteur adipisicing consectetur fugiat tempor. Velit enim labore aliqua adipisicing minim aliquip cupidatat in laborum ex. Amet laboris irure mollit laboris fugiat voluptate minim est. Ad mollit ut aliquip officia mollit incididunt ea irure aliqua eu est nisi nostrud.

Ad amet nisi excepteur velit dolor commodo pariatur occaecat. Adipisicing eiusmod exercitation excepteur pariatur occaecat. Amet nulla excepteur nostrud Lorem aute aliquip duis officia id do culpa officia ex. Nulla dolore irure eu nisi. Minim sit deserunt ullamco laborum aliquip tempor aliquip minim velit.</p>
        </div>
    </main>


    <?php  include 'includes/templates/footer.php' ?>
    <script src="build/js/bundle.min.js"></script>
  </body>
</html>
