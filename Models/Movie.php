<?php 
class Movie extends Production {

  public $running_time;
  
  public function __construct(int $_published_year,int $_running_time,string $_title,array $_category,float $_rating, Media $_image = null, array $_actors = []){

    $this->published_year = $_published_year;
    $this->running_time = $_running_time;

    parent::__construct($_title,$_category,$_rating,$_image,$_actors);
  }


  public function getYearStr(){
    $year = parent::getYearStr();
    return $year . "" . $this->aired_to_year;
  }

};

?>