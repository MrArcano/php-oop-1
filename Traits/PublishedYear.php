<?php 

trait Published_Year
{

  public $published_year;
  public $aired_to_year; 

  public function getYearStr(){
    return "$this->published_year - $this->aired_to_year";
  }
  
}


?>