<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios con Metodo Post</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<header>
    <h1>Usando el metodo Post en formularios con PHP</h1>
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
        <form action="./server.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Joe doe" required>
            <label for="age">Age</label>
            <input type="number" name="age" id="age" placeholder="00" required>
            <button type="submit" id="submit">Send</button>
        </form>
    </section>    
    <section>
        <h2>Formulario</h2>
        <pre>
            < form action="./server.php" method="post">
                < label for="name">Name< /label>
                < input type="text" name="name" id="name" placeholder="Joe doe" required>
                < label for="age">Age< /label>
                < input type="number" name="age" id="age" placeholder="00" required>
                < button type="submit" id="submit">Send< /button>
            < /form> 
        </pre>
    </section>
    <section>
        <h2>Server.php</h2>
        <pre>    
            echo "< pre>";
            var_dump($_POST);
            echo "< /pre>";
        </pre>
        <h2>Resultado</h2>
        <pre>
                array(2) {
                ["name"]=>
                string(7) "joe doe"
                ["age"]=>
                string(2) "24"
                }
        </pre>
    </section>
</body>
</html>