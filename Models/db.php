<?php

$movies = [
  new Movie(  "Batman", 
              ["Action","Adventure","Fantasy","Crime"], 
              1989, 
              4.5, 
              new Media ("https://cps-static.rovicorp.com/2/Open/Warner_Brothers_360/Program/56121/_derived_jpg_q90_310x470_m0/56121_Batman_PA.jpg","Batman")),

  new Movie(  "Spiderman", 
              ["Action","Adventure","Fantasy","Science Fiction"], 
              2002, 
              4,
              new Media ("https://cps-static.rovicorp.com/2/Open/Sony%20Pictures/Spider-Man/_derived_jpg_q90_310x470_m0/SpiderMan-PosterArt.jpg","Spiderman")),

  new Movie(  "Pearl Harbor", 
              ["Drama","Romance","Action","Adventure","War"], 
              2001, 
              1.5, 
              new Media ("https://cps-static.rovicorp.com/2/Open/EU%20VOD%20Releases/Pearl%20Harbor/_derived_jpg_q90_310x470_m0/Pearl_1sheetB_XL.jpg","Pearl Harbor"),
              [
                new Actor("Pinco", "Pallo", 33),
                new Actor("Panco", "Pillo", 22 , "M"),
                new Actor("Lady", "Mary", 26 , "F"),
              ]),
  new Movie ("nome", ["genere"],9999,5)
];

?>