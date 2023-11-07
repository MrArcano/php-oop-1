<?php 
class TvSerie extends Production {
  public $aired_from_year;
  public $aired_to_year; 
  public $number_of_episodes; 
  public $number_of_seasons; 
  
  public function __construct(int $_aired_from_year,string $_aired_to_year,int $_number_of_episodes,int $_number_of_seasons,string $_title,array $_category,float $_rating, Media $_image = null, array $_actors = []){

    $this->aired_from_year = $_aired_from_year;
    $this->aired_to_year = $_aired_to_year;
    $this->number_of_episodes = $_number_of_episodes;
    $this->number_of_seasons = $_number_of_seasons;

    parent::__construct($_title,$_category,$_rating,$_image,$_actors);
  }
};

?>