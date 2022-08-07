<?php

require '../../includes/funciones.php';

incluir_templates('header');
?>
    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin/" class="boton boton-azul">Regresar</a>

        <form action="" class="formulario">
            <fieldset>
                <legend class="titulo-seccion">Información General</legend>
                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" placeholder="Titulo propiedad">

                <label for="precio">Precio</label>
                <input type="number" id="precio" placeholder="$" min="250000">

                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" >

                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Decripcion de la propiedad">
                </textarea>
            </fieldset> <!-- terminar informacion general   -->

            <fieldset>
                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" placeholder="N°" min="1" max="9">

                <label for="wc">Baños</label>
                <input type="number" id="wc" placeholder="N°" min="1" max="9">

                <label for="estacionamientos">Estacionamientos</label>
                <input type="number" id="estacionamientos" placeholder="N°" min="1" max="9">

                <label for="vendedor">Vendedor</label>
                <select id="vendedor">
                    <option value="1">Alexis</option>
                    <option value="1">Fernando</option>

                </select>
            </fieldset>  <!-- terminar informacion propiedad   -->

            <input type="submit" name="registrar" value="registrar" class="boton boton-oscuro">
        </form>

    </main>

<?php
    incluir_templates('footer');
?>