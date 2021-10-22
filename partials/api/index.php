<?php
    require __DIR__ . "/../database.php";
    header("Content-Type: application/json");

    if(!empty($_GET['genre'])){
        $genre=$_GET['genre'];
        $databaseFiltered=[];
        foreach($database as $album){
            if($album['genre']==$genre){
                $databaseFiltered=$album;
            }
        }
        echo json_encode($databaseFiltered);
    }else{
        echo json_encode($database);
    }


?>