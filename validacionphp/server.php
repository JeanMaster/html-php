<?php

if (isset($_POST["name"]) XOR empty($_POST["name"])) {
    $name = $_POST["name"];
    echo " hola, bienvenido $name \n";
} else {
    echo "no mandastes nada \n";
}



if (isset($_POST["form"])) {
    echo "formulario enviado";
} else {
    echo "no se envio nada ";
}

?>