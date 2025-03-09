<?php

$tabla_del_9 = [];

/*

[
    "9 x 1 = 9", 
    "9 x 2 = 18",
    "9 x 3 = 27"
]

*/

for ($i=1; $i <= 10; $i++) {

    $resultado = 9 * $i;
    $texto = "9 x $i = $resultado";

    array_push($tabla_del_9, $texto);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Buenas practicas</title>
</head>
<header> 
    <h1>Usando buenas practicas.</h1> 
    <ul class="menu">
        <li class="menu-item"><a href="/index.php">Home</a></li>
        <li class="menu-item"><a href="/javascript.php">Javascript con php</a></li>
        <li class="menu-item"><a href="/buenas-practicas.php">Buenas Practicas</a></li>
        <li class="menu-item"><a href="/peticiones/index.html">Peticiones</a></li>
        <li class="menu-item"><a href="/forms-get/form-get.php">form-get</a></li>
        <li class="menu-item"><a href="/forms-post/form-post.php">form-post</a></li>
        <li class="menu-item"><a href="/files/files.php">files</a></li>
    </ul>
</header>
<body>
<section>
    <h2>ASI NO 😡!</h2>
    <h2>Tabla del 9</h2>
        <!-- este codigo funciona pero es muuy dificil de leer   -->
    <pre>
        < ul>
            for ($i=0; $i < 10; $i++) { 
                echo "< li>" . "9 x 1 = " . (9 * ($i + 1)) . "< /li>";
            }
        
        < /ul>
    </pre>
</section>
<hr>
<section>
    <h2>Buenas Practicas:</h2>
    <pre>
            $tabla_del_9 = [];

            for ($i=1; $i <= 10; $i++) {

                $resultado = 9 * $i;
                $texto = "9 x $i = $resultado";

                array_push($tabla_del_9, $texto);

            }

            
            < ul>
                < ?php foreach($tabla_del_9 as $resultado): ?>
                
                < li>< ?= $resultado ?>< /li>
                
                < ?php endforeach; ?>
            < /ul>
    </pre>
                    
    <ul>
        <?php foreach($tabla_del_9 as $resultado): ?>
        
        <li><?= $resultado ?></li>
        
        <?php endforeach; ?>
    </ul>
</section>
</body>
</html>