<?php

$productions = [
  new Movie(  1989,
              88,
              "Batman",
              ["Action","Adventure","Fantasy","Crime"],
              4.5,
              new Media ("img/batman.jpg","Batman"),
              [
                new Actor("Michael","Keaton",70,"M"),
                new Actor("Jack","Nicholson",84,"M"),
              ]
            ),

  new Movie(  2002,
              125,
              "Spiderman",
              ["Action","Adventure","Fantasy","Science Fiction"],
              4,
              new Media ("img/spiderman.jpg","Spiderman"),
              [
                new Actor("Tobey","Maguire", 46, "M"),
                new Actor("Kirsten","Dunst", 39 , "F"),
                new Actor("Willem","Dafoe", 66 , "M"),
                new Actor("James","Franco", 43 , "M"),
              ]
            ),

  new Movie(  2001,
              88,
              "Pearl Harbor",
              ["Drama","Romance","Action","Adventure","War"],
              4.5,
              new Media ("img/pearl_harbor.jpg","Pearl Harbor"),
              [
                new Actor("Ben","Affleck", 48, "M"),
                new Actor("Josh","Hartnett", 42 , "M"),
                new Actor("Kate","Beckinsale", 47 , "F"),
              ]
            ),
  new TvSerie(  2007,
                "2012",
                91,
                5,
                "Chuck",
                ["Drama","Action","Commedy"],
                5,
                new Media("img/chuck.jpg","Chuck"),
                [
                  new Actor("Zachary","Levi", 40 , "M"),
                  new Actor("Yvonne","Strahovski", 39 , "F"),
                ]
              ),
  new TvSerie(  2022,
                "in produzione",
                20,
                2,
                "Star Trek: Strange New Worlds",
                ["Adventure","Drama","Science fiction"],
                5,
                new Media("img/star_trek_strange_new_worlds.jpg","Star Trek: Strange New Worlds"),
                [
                  new Actor("Marco","Vivio", 40 , "M"),
                ]
              ),
  new TvSerie(  2021,
                "in produzione",
                12,
                2,
                "Loki",
                ["Adventure","Action","Fantasy"],
                5,
                new Media("img/loki.jpg","Loki"),
                [
                  new Actor("Marco","Vivio", 40 , "M"),
                ]
              ),
  
];
?>