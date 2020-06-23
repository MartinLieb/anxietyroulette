<?php

if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $all = file_get_contents('data.json');
    $all = json_decode($all, true);
    $jsonfile = $all["challenges"];
    $jsonfile = $jsonfile[$id];

    if ($jsonfile) {
        unset($all["challenges"][$id]);
        $all["challenges"] = array_values($all["challenges"]);
        file_put_contents("data.json", json_encode($all));
    }
    header("Location: http://localhost/anxietyroulette/add.php");
}