<?php

$movies = [
  new Movie(  "Batman", 
              ["Action","Adventure","Fantasy","Crime"], 
              1989, 
              4.5, 
              new Media ("img/batman.jpg","Batman")),

  new Movie(  "Spiderman", 
              ["Action","Adventure","Fantasy","Science Fiction"], 
              2002, 
              4,
              new Media ("img/spiderman.jpg","Spiderman")),

  new Movie(  "Pearl Harbor", 
              ["Drama","Romance","Action","Adventure","War"], 
              2001, 
              1.5, 
              new Media ("img/pearl_harbor.jpg","Pearl Harbor"),
              [
                new Actor("Pinco", "Pallo", 33),
                new Actor("Panco", "Pillo", 22 , "M"),
                new Actor("Lady", "Mary", 26 , "F"),
              ]),
  new Movie ("nome", ["genere"],9999,5)
];

?>