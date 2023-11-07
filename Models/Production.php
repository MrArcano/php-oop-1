<?php

class Production {
  public $title;
  public $category;
  public $rating;
  public $image;
  public $actors;

  public function __construct(string $_title,array $_category,float $_rating, Media $_image = null, array $_actors = []){
    $this->title = $_title;
    $this->category = $_category;
    $this->rating = $_rating;
    $this->image = $_image;
    $this->actors = $_actors;
  }
}

?>