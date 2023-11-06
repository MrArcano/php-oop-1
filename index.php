<?php 

require_once __DIR__ . "/Models/Media.php";
require_once __DIR__ . "/Models/Actor.php";
require_once __DIR__ . "/Models/Movie.php";

require_once __DIR__ . "/Models/db.php";


// var_dump($movies[2]);

// var_dump($movies[3]);

$movies[3] -> setImage(new Media("Http","Nome"));

// var_dump($movies[3]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <title>PHP MOVIE OOP</title>
</head>
<body>
  <h1 class=" text-center ">PHP MOVIE OOP</h1>

  <div class="container d-flex ">

  <?php foreach ($movies as $movie):?>

    <!-- card -->
    <div class="card" style="width: 18rem;">
      <img src="<?php echo $movie -> image -> src_image?>" class="card-img-top" alt="<?php echo $movie -> image -> name_image?>">
      <div class="card-body">
        <h5 class="card-title"><?php echo $movie -> title ?></h5>
        <p class="card-text"><?php echo $movie -> year?></p>
        <p class="card-text"><?php echo $movie -> rating?></p>
        <p class="card-text"><?php echo implode(" - ",$movie -> category)?></p>
        
        <p class="card-text"><?php echo ($movie->actors) ? (implode(" - ",$movie -> actors -> name)) : ("undefined") ?></p>
        
      </div>
    </div>

  <?php endforeach?>

  </div>

</body>
</html>