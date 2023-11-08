<?php

class Production {

  use Published_Year;
  
  public $title;
  public $category;
  public $rating;
  public $image;
  public $actors;

  public function __construct(string $_title,array $_category,float $_rating, Media $_image = null, array $_actors = []){
    if(empty($_title) || empty($_category) || empty($_rating) || empty($_image)){
      throw new Exception("Dati non inseriti correttamente");
    }else{
      $this->title = $_title;
      $this->category = $_category;
      $this->rating = $_rating;
      $this->image = $_image;
      $this->actors = $_actors;
    }
  }
}

?>