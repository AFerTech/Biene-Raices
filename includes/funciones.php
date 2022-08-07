<?php

require 'app.php';


// funcion en el que se guarda la direccion de un template a utilizar segun la variable que se pase
function incluir_templates(string $template, bool $inicio= false){

    include     TEMPLATES_URL."/${template}.php";
}