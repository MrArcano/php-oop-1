<?php 

class Media{
  public $src_image;
  public $name_image;

  public function __construct(string $_src_image,string $_name_image){
    $this->src_image = $_src_image;
    $this->name_image = $_name_image;
  }
};

class Actor{
  public $name;
  public $lastname;
  public $gender;
  public $age;

  public function __construct(){
    
  }
};

class Movie{
  public $title;
  public $category;
  public $year;
  public $rating;
  public $image;
  public $actors;

  public function __construct(string $_title,string $_category,int $_year,float $_rating, Media $_image = null, Actor $_actors = null){
    $this->title = $_title;
    $this->category = $_category;
    $this->year = $_year;
    $this->rating = $_rating;
    $this->image = $_image;
    $this->actors = $_actors;
  }
};

$movies = [
  new Movie("Batman", "Action", 1993, 6.4),
  new Movie("Spiderman", "Action", 2023, 8.1),
];

var_dump($movies);

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