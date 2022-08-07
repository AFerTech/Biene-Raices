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

    <main class="contenedor contenido-centrado">
        <h1>Nuestro Blog</h1>
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
                <p class="informacion-meta">Escrito el: <span>20/10/20201</span> Por: <span>Admin</span></p>
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
      <article class="entrada-blog">
        <div class="imagen">
          <picture>
            <source srcset="build/img/blog3.webp" type="image/webp">
            <source srcset="build/img/blog3.jpg" type="image/jpg">
            <img loading="lazy" width="200" height="300" src="build/img/blog1.jpg" alt="Entrada blog">
          </picture>
        </div>
          <div class="texto-entrada">
            <a href="entrada.html">
              <h4>Terraza en el techo de tu casa</h4>
              <p class="informacion-meta">Escrito el: <span>20/10/20201</span> Por: <span>Admin</span></p>
              <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales
                y ahorrando dinero
              </p>
            </a>
          </div>
    </article> <!--Fin article-->
    <article class="entrada-blog">
        <div class="imagen">
          <picture>
            <source srcset="build/img/blog4.webp" type="image/webp">
            <source srcset="build/img/blog4.jpg" type="image/jpg">
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
    </main>


    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncis.html">Anuncion</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos reservados 2022 Copy</p>
    </footer>
    <script src="build/js/bundle.min.js"></script>
  </body>
</html>
