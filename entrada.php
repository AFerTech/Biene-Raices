<?php
require 'includes/funciones.php'; 
incluir_templates('header', $inicio=false);
?>


    <main class="contenedor seccion contenido-centrado">
        <h1>Guí para la decoración de tu hogar</h1>
        
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpg">
            <img loading="lazy" width="200" height="300" src="build/img/destacada.jpg" alt="imagen casa con piscina">
        </picture>
        <div class="resumen-propiedad">
            <p class="informacion-meta">Escrito el <span>04/08/2022</span> Por: <span>Admin</span></p>
           
              <p>Est sit excepteur adipisicing consectetur fugiat tempor. Velit enim labore aliqua adipisicing minim aliquip cupidatat in laborum ex. Amet laboris irure mollit laboris fugiat voluptate minim est. Ad mollit ut aliquip officia mollit incididunt ea irure aliqua eu est nisi nostrud.

Ad amet nisi excepteur velit dolor commodo pariatur occaecat. Adipisicing eiusmod exercitation excepteur pariatur occaecat. Amet nulla excepteur nostrud Lorem aute aliquip duis officia id do culpa officia ex. Nulla dolore irure eu nisi. Minim sit deserunt ullamco laborum aliquip tempor aliquip minim velit.</p>
        </div>
    </main>


    <?php include 'includes/templates/footer.php' ?>
    <script src="build/js/bundle.min.js"></script>
  </body>
</html>
