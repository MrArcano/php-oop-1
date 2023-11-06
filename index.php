<?php 

require_once __DIR__ . "/Models/Media.php";
require_once __DIR__ . "/Models/Actor.php";
require_once __DIR__ . "/Models/Movie.php";

require_once __DIR__ . "/Models/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Custom css -->
  <link rel="stylesheet" href="css/style.css">
  <title>PHP MOVIE OOP</title>
</head>
<body>
  <h1 class=" text-center ">PHP MOVIE OOP</h1>

  <div class="container d-flex gap-3 ">

  <?php foreach ($movies as $movie):?>

    <!-- card -->
    <div class="card" style="width: 18rem;">
      <img src="<?php echo $movie -> image -> src_image ?? 'img/no_poster.jpg'?>" class="card-img-top" alt="<?php echo $movie -> image -> name_image ?? 'NotFound'?>">
      <div class="card-body">
        <h4 class="card-title"><?php echo $movie -> title ?></h4>
        <p class="card-text"><strong>Year:</strong> <?php echo $movie -> year?></p>
        <p class="card-text"><strong>Rating:</strong> <?php echo $movie -> rating?></p>
        <p class="card-text"><strong>Genres:</strong> <?php echo implode(" - ",$movie -> category)?></p>

        <!-- se l'array degli attori è vuoto allora scrivo undefined -->
        <p class="card-text">
          <strong>Actors: </strong><?php echo count($movie -> actors) < 1 ? "undefined" : "" ; ?>
        </p>
        
        <?php foreach ($movie -> actors as $index => $actor): ?>
          <p class="card-text">
            <?php 
              echo $actor -> name . " " . $actor -> lastname . ", Age: " . $actor -> age . ", Gender: " . $actor -> gender;
            ?>
          </p>
        <?php endforeach ?>
        
      </div>
    </div>

  <?php endforeach?>

  </div>

</body>
</html>