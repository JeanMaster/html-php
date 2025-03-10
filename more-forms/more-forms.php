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
            <input type="text" name="name" id="">
            
            
            <!-- ARRAYS INPUTS -->

            <label for="personas">Personas</label>
            <input type="text" name="personas[]" required>
            <input type="text" name="personas[]">
            <input type="text" name="personas[]">
           
            <button type="submit" id="submit">Send</button>
        
        </form>
        <br><hr>
        <form action="./server.php" method="post" enctype="multipart/form-data">

            <!-- Arrays asociativos -->

            <label for="personas">nombre</label>
            <input type="text" name="personas[nonbre]" required>
            <label for="personas">email</label>
            <input type="email" name="personas[email]">
            <label for="personas">edad</label>
            <input type="number" name="personas[edad]">
            <button type="submit" id="submit">Send</button>
        </form>
        <br><hr>

        <!-- Checkbox -->

        <form action="./server.php" method="post" enctype="multipart/form-data">
            <label for="setings">elige:</label>
            <input type="checkbox" name="setings1" value="pizza">
            <input type="checkbox" name="setings2" >
            <input type="checkbox" name="setings3">
            <button type="submit" id="submit">Send</button>
        </form>
        <br><hr>
        <!-- Radio -->
        <form action="./server.php" method="post" enctype="multipart/form-data">
            <label for="mexico">mexico</label>
            <input type="radio" name="pais" value="mexico" id="mexico">
            <label for="venezuela">venezuela</label>
            <input type="radio" name="pais" value="venezuela" id="venezuela">
            <label for="colombia">colombia</label>
            <input type="radio" name="pais" value="colombia" id="colombia">
            <button type="submit" id="submit">Send</button>
        </form>
        <br><hr>
        <!-- multiple archivo -->
        <form action="./server.php" method="post" enctype="multipart/form-data">
            <label for="galeria">Carga tus imagenes</label>
            <input type="file" name="galeria[]" id="galeria" multiple>
            <button type="submit" id="submit">Send</button>
        </form>
    </section>    
</body>
</html>