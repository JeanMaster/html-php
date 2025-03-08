<?php
$usuarios = [
    [
      'id' => 0,
      'username' => "Joel",
    ],
    [
      'id' => 1,
      'username' => "Julieta",
    ],
    [
      'id' => 2,
      'username' => "Pepe",
    ],
];

$edad_de_joel = 23;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Usando Javascript con php</title>
</head> 
<header> 
    <script>
        let users = JSON.parse('<?= json_encode($usuarios)?>');
        let edadJoel = <?= $edad_de_joel ?>;
    </script>
    <h1>Estamos usando javascritp con php</h1> 
    <ul class="menu">
        <li class="menu-item"><a href="/javascript.php">Javascript con php</a></li>
        <li class="menu-item"><a href="/buenas-practicas.php">Buenas Practicas</a></li>
        <li class="menu-item"><a href="./peticiones/index.html">Peticiones</a></li>
    </ul>
</header>
<body>
    <section>
        <h2>codigo php</h2>
        <pre>
        < ?php
    $usuarios = [
        [
        'id' => 0,
        'username' => "Joel",
        ],
        [
        'id' => 1,
        'username' => "Julieta",
        ],
        [
        'id' => 2,
        'username' => "Pepe",
        ],
    ];

    $edad_de_joel = 23;

    ?>
        </pre>
        <h2>codigo javascript</h2>
        <pre>
         
            let users = JSON.parse('< ?= json_encode($usuarios)?>');
            let edadJoel = < ?= $edad_de_joel ?>;
       
        </pre>
    </section>
</body>
</html>