<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anxiety Roulette</title>
  <script defer src="main.js"></script>
  <script defer src="slot.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<?php
    $file = file_get_contents('data.json');
    $data = json_decode($file, true);

    ?>

<body>

<h1>Angst Roulette</h1>
<h2>Din daglige udfordring</h2>

  <div class="flexwrap">
  <div class="wrapper">
  <button id="spin">Spin the wheel</button>
  <p id="text"></p>
  </div>


    <section id="display">
      <div id="container">

        <?php

        foreach($data["challenges"] as $Challenge){ ?>
            <div class="textelement"><span> <?php echo $Challenge["Challenge"]; ?> </span></div>

            <?php }

  ?>
      
      </div>
    </section>


  </div>

  <a href="https://www.angstforeningen.dk/vaerikkebange/index.html" target="_blank">
  <img class="pic" src="images/angstlogo.png" alt="Angstlogo">
  </a>

  <button class="pbutton">
    <a href="/anxietyroulette/add.php">Personliggør dit spin</a>
  </button>



</body>

</html>