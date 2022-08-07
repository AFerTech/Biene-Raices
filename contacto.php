

    <?php include 'includes/templates/header.php'?>

    <main class="contenedor">
        <h1>Contacto</h1>

        <picture>
          <source srcset="build/img/destacada3.webp" type="image/webp">
          <source srcset="build/img/destacada3.jpg" type="image/jpg">
          <img loading="lazy" width="200" height="300" src="build/img/destacada3.jpg" alt="imagen de contacto">
        </picture>
        <h2>Llene el formulario de contacto</h2>

        <form action="" class="formulario">
          <fieldset> <!--sirve para agrupar campos relacionados-->
            <legend class="titulo-seccion">Información Personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Tu nombre o Empresa">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="E-mail">

            <label for="telefono">Teléfono</label>
            <input type="tel" name="telefono" id="telefono" placeholder="Telefono">

            <label for="mensaje">mensaje</label>
            <textarea name="mensaje" id="mensaje" cols="50" rows="20"></textarea>
          </fieldset> <!--información personal-->

          <fieldset>
            <legend class="titulo-seccion">Informacion de propiedad</legend>
            <label for="opciones">Vende o Compra</label>
            <select name="opciones" id="opciones">
              <option value="" disabled selected >--Seleccionar--</option>
              <option value="comprar">Comprar</option>
              <option value="vender ">Vender</option>
            </select>

            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="number" name="presupuesto" id="presupuesto" placeholder="$">
          </fieldset> <!--información propiedad-->
          <fieldset>
            <legend class="titulo-seccion">Contacto</legend>
            <p>Cómo desea ser contactado</p>
            <div class="forma-contacto">
              <label for="contactar-telefono">Teléfono</label>
              <input type="radio" name="contacto" value="telefono" id="contactar-telefono">
              <label for="contactar-email">E-mail</label>
              <input type="radio" name="contacto" value="email" id="contactar-email">
            </div>
            <p>Si eligió teléfono, elija la fecha y hora para ser contactado</p>

            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha">

            <label for="hora">Hora:</label>
            <input type="time" name="hora" id="hora" min="09:00" max="18:00">
          </fieldset>
          <input type="submit" name="enviar" value="enviar" class="boton-verde">
        </form>
    </main>


    <?php include 'includes/templates/footer.php'?>
    <script src="build/js/bundle.min.js"></script>
  </body>
</html>
