<?php
 $paises = [
    "Netherlands",
    "Sweden",
    "Switzerland",
    "Denmark",
    "Norway",
    "Finland",
    "Iceland",
    "Ireland",
    "New Zealand",
    "Singapore",
    "United Arab Emirates",
    "Qatar",
    "Kuwait",
    "Luxembourg",
    "Austria",
    "Belgium",
    "Cyprus",
    "Estonia",
    "Latvia",
    "Lithuania"
  ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html con php</title>
    <style>
        
        pre {
        
            background-color: lightblue;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 30px;
        }
        body {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        section {
            width: 75%;
            padding: 25px;
            background-color: lightgray;
            border-radius: 25px;
            margin-bottom: 20px;
            object-fit: contain;
        }
    </style>
</head>
<header> 
    <h1>Estamos usando PHP con html ! HOLAA </h1> 
</header>
<body>
    <section>
        <!-- imprimiendo con php -->

        <h2>Imprime texto y etiquetas con php</h2>
        
        <pre>  
            echo "<b> Hola, estoy imprimiendo con php usando echo </b> ";
        </pre>
        <?php
            echo "<b> Hola, estoy imprimiendo con php usando echo </b> ";
            ?>
        <hr>
        <pre>  
            < ?= <i>Esta es otra forma de poner texto con php</i> ? >";
        </pre>
        <?= "<i>Esta es otra forma de poner texto con php <br> advertencia: no va espacio entre las < > </i>"?>

        <!-- imprimiendo variables con < ?=?> -->
        <hr>
        <pre>
            < ?php
                $nombre = "jean";
            ?>

            < ?= "<p>Hola mi nombre es $nombre</p>"?>
        </pre>

        <?php
            $nombre = "jean";
        ?>

        <?= "<p>Hola mi nombre es $nombre</p>"?>
     
    </section>
        <!-- condicionales, varias formas de hacerlo, solo una correcta -->
        <h2>Condicionales</h2>
    <section>
        <!-- NI EN BROMA HAGAS ESTO, FUNCIONA PEOR N OES UNA BUENA PRACTICA -->
        <h2>Advertencia esto no se debe hacer:</h2>
        <pre>
            < ?php if ($nombre == "jean") {
                    echo "<p>Bienvenido a casa Sr.$nombre </p>";
                } else {
                    echo "<p> Alerta identificate intruso </p>";
                }
            
            ?>
        </pre>

        <?php if ($nombre == "jean") {
                echo "<p>Bienvenido a casa Sr.$nombre </p>";
            } else {
                echo "<p> Alerta identificate intruso </p>";
            }
        ?>
         <hr>
        <h2>Esto es mas aceptable</h2>
            <!-- ACEPTABLE PERO NO LO MEJOR -->
            <pre>
            < ?php if ($nombre == "jean") { ?>
                <p> Bienvenido a casa Sr.< ?php echo $nombre?> </p>
            < ?php } else { ?>
                <p> Alerta identificate intruso </p>
            << ?php } ?>
        
            </pre>

            <?php if ($nombre == "jean") { ?>
                <p> Bienvenido a casa Sr.<?php echo $nombre?> </p>
            <?php } else { ?>
                <p> Alerta identificate intruso </p>
            <<?php } ?>
            <hr>
                <!-- FORMA CORRECTA -->
            <h2> ESTA ES LA FORMA DEFINITIVA COMO DEBERIAS HACERLO</h2>

            <pre>
                < ?php if($nombre == "jean"): ?>
                        <p> Bienvenido a casa Sr.< ?php echo $nombre?> </p>
                    < ?php else:?>
                        <p> Alerta identificate intruso </p>
                    < ?php endif;?>
            </pre>


            <?php if($nombre == "jean"): ?>
                <p> Bienvenido a casa Sr.<?php echo $nombre?> </p>
            <?php else:?>
                <p> Alerta identificate intruso </p>
            <?php endif;?>
    </section>
    <h2> CICLOS</h2>
    <section>
        <h2>USANDO CICLOS</h1>
        
        <!-- CICLO FOR -->
        <h2>For</h2>
        <pre>
            < ul>
                < ?php for ($i=0; $i <= (count($paises) -1 );  $i++):?>
                    
                    < li>< ?php echo $paises[$i]?>< /li>
                
                < ?php endfor;?>        
            < /ul>
        </pre>

        <ul>
            <?php for ($i=0; $i <= (count($paises) -1 );  $i++):?>
                
                <li><?php echo $paises[$i]?></li>
            
            <?php endfor;?>        
        </ul>
        <hr>
        <!-- CICLO WHILE -->
        <h2>While</h2>
       <pre>
       <ul>
        < ?php
                $a = 1; 
                while ($a <= 10): ?>
                < li> < ?php echo "$a"; $a++?> < /li>
            
            < ?php endwhile; ?>
        </ul>      
       </pre>
        <ul>
        <?php
                $a = 1; 
                while ($a <= 10): ?>
                <li> <?php echo "$a"; $a++?> </li>
            
            <?php endwhile; ?>
        </ul> 
        <hr>
        <!-- CICLO FOREACH -->
        <h2>USANDO FOREACH</h2>  
        <pre>
            < ul>
                    < ?php foreach ($paises as $pais): ?>
                    < li>Bienvenido a < ?php echo $pais?>< /li>
                    < ?php endforeach;?>
                < /ul>
        </pre>
            <ul>
                <?php foreach ($paises as $pais): ?>
                <li>Bienvenido a <?php echo $pais?></li>
                <?php endforeach;?>
            </ul>
    </section>
</body>
</html>