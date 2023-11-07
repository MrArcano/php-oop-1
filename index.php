<?php 

require_once __DIR__ . "/Models/Production.php";
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/TvSerie.php";
require_once __DIR__ . "/Models/Media.php";
require_once __DIR__ . "/Models/Actor.php";

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
<body class="text-bg-dark">
  <h1 class=" text-center ">PHP MOVIE OOP</h1>

  <div class="container">
    <div class="row row-cols-3">
      <?php foreach ($productions as $production):?>
        <div class="col py-3">
          <!-- card -->
          <div class="card bg-dark-subtle m-auto h-100 " style="width: 18rem;">
            <img src="<?php echo $production -> image -> src_image ?? 'img/no_poster.jpg'?>" class="card-img-top" alt="<?php echo $production -> image -> name_image ?? 'NotFound'?>">
            <div class="card-body">
              <h6 class="card-text text-center mb-3 text-bg-dark"><?php echo get_class($production) ?></h6>
              <h4 class="card-title"><?php echo $production -> title ?></h4>
              <p class="card-text">
                <strong>Year: </strong>
                <?php echo get_class($production) === "Movie" ? $production -> published_year : $production -> aired_from_year . " - " . $production -> aired_to_year?>
              </p>

              <?php if(get_class($production) === "TvSerie"): ?>
                <p class="card-text">
                  <span class="me-3"><strong>Seasons: </strong><?php echo $production -> number_of_seasons ?></span>
                  <span><strong>Episodes: </strong><?php echo $production -> number_of_episodes ?></span>
                </p>
              <?php endif ?>

      
              <p class="card-text"><strong>Rating:</strong> <?php echo $production -> rating?></p>
              <p class="card-text"><strong>Genres:</strong> <?php echo implode(" - ",$production -> category)?></p>
      
              <!-- se l'array degli attori è vuoto allora scrivo undefined -->
              <p class="card-text">
                <strong>Actors: </strong><?php echo count($production -> actors) < 1 ? "undefined" : "" ; ?>
              </p>

              <ul>
                <?php foreach ($production -> actors as $index => $actor): ?>
                  <li class="card-text">
                    <?php 
                      echo $actor -> get_FullName();
                    ?>
                  </li>
                <?php endforeach?>
              </ul>

            </div>
          </div>
        </div>
      <?php endforeach?>
    </div>
  </div>

</body>
</html>