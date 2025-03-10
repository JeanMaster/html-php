<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios mas complejos</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<header>
    <h1>Formularios mas complejos</h1>
    <ul class="menu">
        <li class="menu-item"><a href="/index.php">Home</a></li>
        <li class="menu-item"><a href="/javascript.php">Javascript con php</a></li>
        <li class="menu-item"><a href="/buenas-practicas.php">Buenas Practicas</a></li>
        <li class="menu-item"><a href="/peticiones/index.html">Peticiones</a></li>
        <li class="menu-item"><a href="/forms-get/form-get.php">form-get</a></li>
        <li class="menu-item"><a href="/forms-post/form-post.php">form-post</a></li>
        <li class="menu-item"><a href="/files/files.php">files</a></li>
        <li class="menu-item"><a href="/more-forms/more-forms.php">more forms</a></li>
        <li class="menu-item"><a href="/validacionphp/validacion.php">validacion php</a></li>
        <li class="menu-item"><a href="/Sanitizando/formulario.php">Sanitazand</a></li>
    </ul>
</header>
<body>
    <section>
        <form action="./server.php" method="post" enctype="multipart/form-data">            
            <!-- BASIC iNPUT  -->
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name">
            <button name="form" type="submit" id="submit">Send</button>
    </section>    
</body>
</html>