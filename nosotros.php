<?php
require 'includes/funciones.php'; 
incluir_templates('header', $inicio=false);
?>


    <main class="contenedor mas-sobre-nosotros">
      <h1>Conoce sobre nosotros</h1>
      <div class="contenido-nosotros nosotros">
        <div class="imagen">
        <picture>
          <source srcset="build/img/nosotros.webp" type="image/webp">
          <source srcset="build/img/nosotros.jpg" type="image/jpg">
          <img loading="lazy" width="200" height="300" src="build/img/nosotros.jpg" alt="mas sobre nosotros">
        </picture>
      </div>
      <div class="texto-nosotros">
        <blockquote> <!--Se utiliza cuando hay contenido por citar-->
          25 años de experiencia
        </blockquote>
        <p>Eiusmod anim aute aliquip officia sint mollit ex consectetur veniam enim duis culpa enim. Amet nostrud irure ullamco quis nulla reprehenderit consectetur duis proident do est. Nisi eiusmod nulla aliquip cillum in ipsum mollit excepteur do anim ullamco. Adipisicing enim ad pariatur qui in quis ullamco aliquip laborum id aute aliquip. Ut do fugiat aliquip et.</p>
        <p> ex consectetur veniam enim duis culpa enim. Amet nostrud irure ullamco quis nulla reprehenderit consectetur duis proident do est. Nisi eiusmod nulla aliquip cillum in ipsum mollit excepteur do anim ullamco. Adipisicing enim ad pariatur qui in quis ullamco aliquip laborum id aute aliquip. Ut do fugiat aliquip et. </p>
        
      </div>
      </div>
    </main>


    <section class="contenedor seccion">
      <h1>Más Sobre Nosotros</h1>

      <div class="iconos-nosotros">
        <div class="icono">
          <img
            src="build/img/icono1.svg"
            alt="Icono seguridad"
            loading="lazy"
          />
          <h3>Seguridad</h3>
          <p>
            Eu anim ipsum nulla voluptate. Non ut ex aute id ullamco ad id
            deserunt elit culpa ipsum mollit. Nostrud consectetur mollit commodo
            culpa minim qui ea amet nisi duis est consequat proident magna.
          </p>
        </div>
        <div class="icono">
          <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy" />
          <h3>Seguridad</h3>
          <p>
            Eu anim ipsum nulla voluptate. Non ut ex aute id ullamco ad id
            deserunt elit culpa ipsum mollit. Nostrud consectetur mollit commodo
            culpa minim qui ea amet nisi duis est consequat proident magna.
          </p>
        </div>
        <div class="icono">
          <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy" />
          <h3>Seguridad</h3>
          <p>
            Eu anim ipsum nulla voluptate. Non ut ex aute id ullamco ad id
            deserunt elit culpa ipsum mollit. Nostrud consectetur mollit commodo
            culpa minim qui ea amet nisi duis est consequat proident magna.
          </p>
        </div>
      </div>
    </section>


    <?php
    incluir_templates('footer');
    ?>
    <script src="build/js/bundle.min.js"></script>
  </body>
</html>
