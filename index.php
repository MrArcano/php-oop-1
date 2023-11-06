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

  public function __construct(string $_name,string $_lastname,int $_age,string $_gender = "NaN"){
    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->age = $_age;
    $this->gender = $_gender;
  }
};

class Movie{
  public $title;
  public $category;
  public $year;
  public $rating;
  public $image;
  public $actors;

  public function __construct(string $_title,array $_category,int $_year,float $_rating, Media $_image = null, array $_actors = null){
    $this->title = $_title;
    $this->category = $_category;
    $this->year = $_year;
    $this->rating = $_rating;
    $this->image = $_image;
    $this->actors = $_actors;
  }
};

$movies = [
  new Movie(  "Batman", 
              ["Action","Adventure","Fantasy","Crime"], 
              1989, 
              4.5, 
              new Media ("https://cps-static.rovicorp.com/2/Open/Warner_Brothers_360/Program/56121/_derived_jpg_q90_310x470_m0/56121_Batman_PA.jpg","Batman")),

  new Movie(  "Spiderman", 
              ["Action","Adventure","Fantasy","Science Fiction"], 
              2002, 
              4,
              new Media ("https://cps-static.rovicorp.com/2/Open/Sony%20Pictures/Spider-Man/_derived_jpg_q90_310x470_m0/SpiderMan-PosterArt.jpg","Spiderman")),

  new Movie(  "Pearl Harbor", 
              ["Drama","Romance","Action","Adventure","War"], 
              2001, 
              1.5, 
              new Media ("https://cps-static.rovicorp.com/2/Open/EU%20VOD%20Releases/Pearl%20Harbor/_derived_jpg_q90_310x470_m0/Pearl_1sheetB_XL.jpg","Pearl Harbor"),
              [
                new Actor("Pinco", "Pallo", 33 , "M"),
                new Actor("Panco", "Pillo", 22 , "M"),
                new Actor("Lady", "Mary", 26 , "F"),
              ]),
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