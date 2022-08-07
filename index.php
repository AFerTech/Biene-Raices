
<?php
declare(strict_types= 1);
require 'includes/funciones.php';
  // $inicio=true;  // añade la variable al código php
// mandamos el nombre del template que se trata de agregar 
incluir_templates('header', $inicio=true);
?>


    <main class="contenedor seccion">
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
    </main>
    <section class="seccion contenedor">
      <h2>Casa y Depa en Ventas</h2>
      <div class="contenedor-anuncios">
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio1.webp" type="image/webp" />
            <source srcset="build/img/anuncio1.jpg" type="image/jpg" />
            <img
              loading="lazy"
              width="200"
              height="300"
              src="build/img/anuncio1.jpg"
              alt="anuncio"
            />
          </picture>
          <div class="contenido-anuncio">
            <h3>Casa de Lujo en Lago</h3>
            <p>
              Casa de lago con excelente vista, acabados de lujo a un excelente
              precio
            </p>
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
            <a href="anuncios.html" class="boton-amarillo-block">Ver Propiedad</a>
          </div> <!--Cotenido anuncio-->
        </div> <!--Anuncio-->
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio2.webp" type="image/webp" />
            <source srcset="build/img/anuncio2.jpg" type="image/jpg" />
            <img
              loading="lazy"
              width="200"
              height="300"
              src="build/img/anuncio1.jpg"
              alt="anuncio"
            />
          </picture>
          <div class="contenido-anuncio">
            <h3>Casa de Lujo en Lago</h3>
            <p>
              Casa de lago con excelente vista, acabados de lujo a un excelente
              precio
            </p>
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
            <a href="anuncios.html" class="boton-amarillo-block">Ver Propiedad</a>
          </div> <!--Cotenido anuncio-->
        </div> <!--Anuncio-->
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio3.webp" type="image/webp" />
            <source srcset="build/img/anuncio3.jpg" type="image/jpg" />
            <img
              loading="lazy"
              width="200"
              height="300"
              src="build/img/anuncio1.jpg"
              alt="anuncio"
            />
          </picture>
          <div class="contenido-anuncio">
            <h3>Casa de Lujo en Lago</h3>
            <p>
              Casa de lago con excelente vista, acabados de lujo a un excelente
              precio
            </p>
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
            <a href="anuncios.html" class="boton-amarillo-block">Ver Propiedad</a>
          </div> <!--Cotenido anuncio-->
        </div> <!--Anuncio-->
      </div>  <!--Contenedor anuncios-->
      <div class="alinear-derecha">
        <a href="anuncios.html" class="boton-verde">Ver Todas</a>
      </div>
    </section>

    <section class="imagen-contacto">
      <h2>Encuentra la Casa de tus sueños</h2>
      <p>Eu velit incididunt eiusmod irure occaecat pariatur sit tempor aliqua ullamco mollit est commodo. Sunt ut tempor excepteur dolore sunt magna commodo tempor deserunt incididunt quis nisi ipsum ut. Veniam dolor veniam consectetur deserunt nostrud aliquip culpa aliqua nostrud consequat. Amet qui ex fugiat sint. Mollit sit irure tempor consequat ad veniam aliqua nulla laboris labore duis eu. Quis esse consequat esse cupidatat magna voluptate eu.</p>
      <a href="contacto.html" class="boton-amarillo">Contactos</a>
    </section>

      <div class="contenedor seccion seccion-inferior">
        <section class="blog">
          <h3>Nuestro Blog</h3>
          <article class="entrada-blog">
              <div class="imagen">
                <picture>
                  <source srcset="build/img/blog1.webp" type="image/webp">
                  <source srcset="build/img/blog1.jpg" type="image/jpg">
                  <img loading="lazy" width="200" height="300" src="build/img/blog1.jpg" alt="Entrada blog">
                </picture>
              </div>
                <div class="texto-entrada">
                  <a href="entrada.html">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>20/10/20201</span> Por: <span>Admin</span></p>
                    <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales
                      y ahorrando dinero
                    </p>
                  </a>
                </div>
          </article> <!--Fin article-->
          <article class="entrada-blog">
              <div class="imagen">
                <picture>
                  <source srcset="build/img/blog2.webp" type="image/webp">
                  <source srcset="build/img/blog2.jpg" type="image/jpg">
                  <img loading="lazy" width="200" height="300" src="build/img/blog1.jpg" alt="Entrada blog">
                </picture>
              </div>
                <div class="texto-entrada">
                  <a href="entrada.html">
                    <h4>Guia para la decoración de tu hogar</h4>
                    <p>Escrito el: <span>20/10/20201</span> Por: <span>Admin</span></p>
                    <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y
                      colores para darle vida a tu espacio
                    </p>
                  </a>
                </div>
          </article> <!--Fin article-->
        </section> <!--Fin seccion blog-->
        
        <section class="testimoniales">
          <h3>Testimoniales</h3>
          <div class="testimonial">
            <blockquote>
              Officia occaecat magna mollit id nisi magna excepteur excepteur laboris nostrud aute nostrud. Dolor tempor sit eiusmod ut culpa. Officia voluptate voluptate excepteur consectetur.
            </blockquote>
            <p>Alexis Fernando</p>
          </div>
        </section> 
      </div> <!--Fin div-seccion-->
     


    <?php
    incluir_templates('footer');
    ?>
    
