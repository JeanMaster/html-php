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
        <li class="menu-item"><a href="/more-forms/more-forms.php">more forms</a></li>
        <li class="menu-item"><a href="/validacionphp/validacion.php">validacion php</a></li>
        <li class="menu-item"><a href="/Sanitizando/formulario.php">Sanitazand</a></li>
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
    <section>
        <h2>Formulario</h2>
        <pre>
            < form action="./server.php" method="post" enctype="multipart/form-data">            
                
                < label for="id">ID</ label>
                
                < input type="file" name="id" id="id" required accept=".jpg, .jpeg, .png" >
            
                < button type="submit" id="submit">Send< /button>
            
            < /form>
        </pre>
    </section>
    <section>
        <h2>Server.php</h2>
        <pre>
        
            echo "< pre>";
            var_dump($_FILES);
            echo "< /pre>";

            $basename = $_FILES["id"]["name"];
            echo $basename;

            $image = $_FILES["id"]["tmp_name"];
            $savepath = "images/$basename";

            move_uploaded_file($image , $savepath);

            < img src="< ?= $savepath?>" alt=" < ? $basename?>">
        </pre>
        <h2>Resultado</h2>
        <pre>
            array(1) {
                ["id"]=>
                array(6) {
                    ["name"]=>
                    string(5) "1.png"
                    ["full_path"]=>
                    string(5) "1.png"
                    ["type"]=>
                    string(9) "image/png"
                    ["tmp_name"]=>
                    string(14) "/tmp/php8VkeGx"
                    ["error"]=>
                    int(0)
                    ["size"]=>
                    int(12883)
                }
            }
            
            <img src="./images/1.png" alt="1.JPG">
        </pre>
    </section>
</body>
</html>