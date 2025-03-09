<?php

$nombre = $_GET["name"];
$edad = $_GET["age"];

echo "$nombre tiene $edad años de edad \n" ;
echo "<br>";
echo "<br>";
if ($edad  < 18) {
   echo "$nombre es menor de edad todavia \n";
   echo "<br>";
} else {
    echo "$nombre ya es mayor de edad \n";
}



?>