<?php
    
    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";

    $basename = $_FILES["id"]["name"];
    echo $basename;

    $image = $_FILES["id"]["tmp_name"];
    $savepath = "images/$basename";

    move_uploaded_file($image , $savepath);
?>
   
   <img src="<?= $savepath?>" alt="<? $basename?>">