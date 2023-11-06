<?php 

require_once __DIR__ . "/Models/Media.php";
require_once __DIR__ . "/Models/Actor.php";
require_once __DIR__ . "/Models/Movie.php";

require_once __DIR__ . "/Models/db.php";





var_dump($movies[2]);

var_dump($movies[3]);

$movies[3] -> setImage(new Media("Http","Nome"));

var_dump($movies[3]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 1</title>
</head>
<body>
  <h1>PHP OOP 1</h1>
</body>
</html>