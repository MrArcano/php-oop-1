<?php

$movies = [
  new Movie(  "Batman", 
              ["Action","Adventure","Fantasy","Crime"], 
              1989, 
              4.5, 
              new Media ("img/batman.jpg","Batman"),
              [
                new Actor("Michael","Keaton",70,"M"),
                new Actor("Jack","Nicholson",84,"M"),
              ]
            ),

  new Movie(  "Spiderman", 
              ["Action","Adventure","Fantasy","Science Fiction"], 
              2002, 
              4,
              new Media ("img/spiderman.jpg","Spiderman"),
              [
                new Actor("Tobey","Maguire", 46, "M"),
                new Actor("Kirsten","Dunst", 39 , "F"),
                new Actor("Willem","Dafoe", 66 , "M"),
                new Actor("James","Franco", 43 , "M"),
              ]
            ),

  new Movie(  "Pearl Harbor", 
              ["Drama","Romance","Action","Adventure","War"], 
              2001, 
              1.5, 
              new Media ("img/pearl_harbor.jpg","Pearl Harbor"),
              [
                new Actor("Ben","Affleck", 48, "M"),
                new Actor("Josh","Hartnett", 42 , "M"),
                new Actor("Kate","Beckinsale", 47 , "F"),
              ]
            ),
  new Movie ("Title", ["genres"],1999,2)
];

?>