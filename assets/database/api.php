<?php 


    include  __DIR__.'/json.php';

    $dischiFiltrati = [];

    $genreFilter = strtolower($_GET['genre']);
    $authorFilter = strtolower($_GET['author']);

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

    header("Content-Type: application/json");
    
    echo json_encode($dischiFiltrati);

?>