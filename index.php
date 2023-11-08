<?php 

try {
  require_once __DIR__ ."/Traits/PublishedYear.php";
  require_once __DIR__ . "/Models/Production.php";
  require_once __DIR__ . "/Models/Movie.php";
  require_once __DIR__ . "/Models/TvSerie.php";
  require_once __DIR__ . "/Models/Media.php";
  require_once __DIR__ . "/Models/Actor.php";
  require_once __DIR__ . "/Models/db.php";
} catch (Exception $e) {
  $error_msg = $e->getMessage();
}

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

    <?php if(isset($error_msg)): ?>

      <div class="alert alert-light text-center" role="alert">
        <?php echo $error_msg ?>
      </div>

    <?php else: ?>

      <div class="row">
        <?php foreach ($productions as $production):?>
          <div class="col py-3">
            <!-- card -->
            <div class="card bg-dark-subtle m-auto" style="width: 600px;height: 300px;">
              <div class="row g-0">
                <div class="col-4">
                  <img src="<?php echo $production -> image -> src_image ?? 'img/no_poster.jpg'?>" class="img-fluid rounded-start" alt="<?php echo $production -> image -> name_image ?? 'NotFound'?>">
                </div>
              
                <div class="col-8">
                  <div class="card-body">
                    <h6 class="card-text text-center text-bg-dark mb-2"><?php echo get_class($production) ?></h6>
                    <h4 class="card-title"><?php echo $production -> title ?></h4>
                    <p class="card-text">
                      <strong>Year: </strong>
                      <span class="text-14"><?php echo $production -> getYearStr()?></span>
                    </p>
      
                    <?php if(get_class($production) === "TvSerie"): ?>
                      <p class="card-text">
                        <strong>Seasons: </strong><span class="text-14 me-3"><?php echo $production -> number_of_seasons ?></span>
                        <strong>Episodes: </strong><span class="text-14"><?php echo $production -> number_of_episodes ?></span>
                      </p>
                    <?php endif ?>
      
            
                    <p class="card-text"><strong>Rating:</strong> <span class="text-14"><?php echo $production -> rating?></span></p>
                    <p class="card-text"><strong>Genres:</strong> <span class="text-14"><?php echo implode(" - ",$production -> category)?></span></p>
            
                    <!-- se l'array degli attori è vuoto allora scrivo undefined -->
                    <p class="card-text">
                      <strong>Actors: </strong><?php echo count($production -> actors) < 1 ? "undefined" : "" ; ?>
                    </p>
      
                    <ul>
                      <?php foreach ($production -> actors as $index => $actor): ?>
                        <li class="card-text text-14">
                          <?php 
                            echo $actor -> get_FullName();
                          ?>
                        </li>
                      <?php endforeach ?>
                    </ul>
      
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>

    <?php endif ?>

  </div>

</body>
</html>