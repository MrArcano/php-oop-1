<?php

class Media{
  public $src_image;
  public $name_image;

  public function __construct(string $_src_image,string $_name_image){
    $this->src_image = $_src_image;
    $this->name_image = $_name_image;
  }
};

?>