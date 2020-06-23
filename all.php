<?php 
    $jsonfile = file_get_contents("data.json");
    echo json_encode($jsonfile);