<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviando Archivos por php</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<header>
    <h1>Enviando Archivos por formularios a un servidor php</h1>
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
        <form action="./server.php" method="post" enctype="multipart/form-data">            
            <label for="id">ID</label>
            <input type="file" name="id" id="id" required accept=".jpg, .jpeg, .png" >
              
            
            <button type="submit" id="submit">Send</button>
        
        </form>
    </section>    

</body>
</html>