<?php

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

  public function get_FullName(){
    return $this -> name . " " . $this -> lastname ;
  }
};

?>