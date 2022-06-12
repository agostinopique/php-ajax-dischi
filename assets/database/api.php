<?php 


    include_once  __DIR__.'/json.php';

    $dischiFiltrati = [];

    $genreFilter = strtolower($_GET['genre']);
    $authorFilter = strtolower($_GET['author']);

    $genreArr = [];
    $artistArr = [];

    foreach($dischi as $disco){

        if(!in_array($disco['genre'], $genreArr)){
            $genreArr[] = $disco['genre'];
        }


        if(!in_array($disco['author'], $artistArr)){
            $artistArr[] = $disco['author'];
        }
    }



    // FILTRO DEI DISCHI IN BASE AI PARAMETRI $_GET

    if($genreFilter == 'default'){

        $dischiFiltrati = $dischi;

    } else {

        foreach($dischi as $disco){
            $dischiFiltrati = array_filter($dischi, fn ($disco) => strtolower($disco['genre']) == $genreFilter);
        }

    }

    if($authorFilter != 'default'){
        $dischiFiltrati = array_filter($dischiFiltrati, fn ($disco) => strtolower($disco['author']) == $authorFilter);
    }

    
    // die;

    header("Content-Type: application/json");


    echo json_encode([
        "dischiFiltrati" => $dischiFiltrati,
        "artistArr" => $artistArr,
        "genreArr" => $genreArr
    ]);
    
?>