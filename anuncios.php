<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;700&family=Playfair+Display:ital,wght@1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="build/css/app.css" />
  </head>
  <body>
    <header class="header">
      <div class="contenedor contenido-header">
        <div class="barra">
          <a href="/">
            <img src="build/img/logo.svg" alt="logo de bienes raices" />
          </a>
          <div class="mobile-menu">
            <img src="build/img/barras.svg" alt="icono menu responsive">
          </div>

          <div class="derecha">
            <img src="build/img/dark-mode.svg" alt="icono-dark-mode" class="dark-mode-boton">
            <nav class="navegacion">
              <a href="nosotros.html">Nosotros</a>
              <a href="anuncios.html">Anuncios</a>
              <a href="blog.html">Blog</a>
              <a href="contacto.html">Contacto</a>
            </nav>
          </div>
          
        </div>
        <!--Cierre de la barra-->
      </div>
    </header>

    <main class="contenedor">
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
            <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
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
            <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
          </div> <!--Cotenido anuncio-->
        </div> <!--Anuncio-->

        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio4.webp" type="image/webp" />
            <source srcset="build/img/anuncio4.jpg" type="image/jpg" />
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
            <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
          </div> <!--Cotenido anuncio-->
        </div> <!--Anuncio-->
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio5.webp" type="image/webp" />
            <source srcset="build/img/anuncio5.jpg" type="image/jpg" />
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
            <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
          </div> <!--Cotenido anuncio-->
        </div> <!--Anuncio-->
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio6.webp" type="image/webp" />
            <source srcset="build/img/anuncio6.jpg" type="image/jpg" />
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
            <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
          </div> <!--Cotenido anuncio-->
        </div> <!--Anuncio-->

        

        
      </div>  <!--Contenedor anuncios-->
    </main>


    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncis.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos reservados 2022 Copy</p>
    </footer>
    <script src="build/js/bundle.min.js"></script>
  </body>
</html>
