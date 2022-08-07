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
    <link rel="stylesheet" href="/build/css/app.css" />
  </head>
  <body>
    <!-- Operador ternario para agregar una variable con la que se añade un fondo al header del index -->
    <header class="header  <?php echo  ($inicio) ? 'inicio': ''; ?>">
      <div class="contenedor contenido-header">
        <div class="barra">
          <a href="/">
            <img src="/build/img/logo.svg" alt="logo de bienes raices" />
          </a>
          <div class="mobile-menu">
            <img src="/build/img/barras.svg" alt="icono menu responsive">
          </div>

          <div class="derecha">
            <img src="/build/img/dark-mode.svg" alt="icono-dark-mode" class="dark-mode-boton">
            <nav class="navegacion">
              <a href="nosotros.php">Nosotros</a>
              <a href="anuncios.php">Anuncios</a>
              <a href="blog.php">Blog</a>
              <a href="contacto.php">Contacto</a>
            </nav>
          </div>
          
        </div>
        <!--Cierre de la barra-->
      </div>
    </header>