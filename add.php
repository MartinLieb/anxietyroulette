<?php
    $file = file_get_contents('data.json');
    $data = json_decode($file, true);
if (isset($_POST["add"])) {
    unset($_POST["add"]);
    $data["challenges"] = array_values($data["challenges"]);
    array_push($data["challenges"], $_POST);
    file_put_contents("data.json", json_encode($data));
    header("Location: http://localhost/anxietyroulette/add.php");
}
?>
<form action="http://localhost/anxietyroulette/add.php" method="POST">
    <input type="text" name="Challenge" placeholder="Challenge"/>
    <input type="submit" name="add"/>

<ul>
    <?php

    foreach($data["challenges"] as $Challenge){ ?>
        <li> <?php echo $Challenge["Challenge"]; ?> </li>
        <a href="http://localhost/anxietyroulette/delete.php?id=<?php echo $Challenge["Challenge"]; ?>">Delete</a>
    <?php }

    ?>

</ul>

</form>
