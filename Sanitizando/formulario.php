
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">
    <title>Sanitizando datos</title>
</head>
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
    <form action="server.php" method="post">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="username">Username:</label>
        <input type="text" name="username" id="username">

        <label for="email">Correo:</label>
        <input type="text" name="email" id="email">

        <label for="age">Edad:</label>
        <input type="text" name="age" id="age">

        <button type="submit">Mandar formulario</button>

    </form>

</section>

</body>
</html>
