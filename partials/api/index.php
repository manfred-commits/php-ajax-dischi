<?php
    require __DIR__ . "/../database.php";
    header("Content-Type: application/json");

    $selectGenres=[];

    if(!empty($_GET['genre'])){
        $genre=$_GET['genre'];
        $databaseFiltered=[];
        foreach($database as $album){
            if($album['genre']==$genre){
                $databaseFiltered[]=$album;
            }
        }
        echo json_encode($databaseFiltered);

    }elseif(!empty($_GET['select'])){
        foreach($database as $album){

            if(!in_array($album['genre'], $selectGenres)){
    
                $selectGenres[]=$album['genre'];
            }
        }
        echo json_encode($selectGenres);

        
    }else{
        echo json_encode($database);
    }


        
    
        
    

?>