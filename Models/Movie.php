<?php 
class Movie{
  public $title;
  public $category;
  public $year;
  public $rating;
  public $image;
  public $actors;

  public function setImage(Media $_image){
    $this->image = $_image;
  }

  public function __construct(string $_title,array $_category,int $_year,float $_rating, Media $_image = null, array $_actors = []){
    $this->title = $_title;
    $this->category = $_category;
    $this->year = $_year;
    $this->rating = $_rating;
    $this->image = $_image;
    $this->actors = $_actors;
  }
};

?>