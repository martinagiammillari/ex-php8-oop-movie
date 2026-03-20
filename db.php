<?php
//ISTANZIO 2 OGGETTI GENRE
$action = new Genre("Azione");
$sciFi = new Genre("Fantascienza");
$drama = new Genre("Drammatico");



//ISTAZIO 2 OGGETTI MOVIE
$movies = [
    new Movie("Oppenheimer", 2023, "Christopher Nolan", [$action, $sciFi], "Inglese"),
    new Movie("Pulp Fiction", 1994, "Quentin Tarantino", [$action, $drama], "Inglese"),
    new Movie("Inception", 2010, "Christopher Nolan", [$sciFi, $action], "Inglese"),
    new Movie("Interstellar", 2014, "Christopher Nolan", [$sciFi, $drama], "Inglese"),
    new Movie("The Dark Knight", 2008, "Christopher Nolan", [$action, $drama], "Inglese"),
    new Movie("Blade Runner 2049", 2017, "Denis Villeneuve", [$sciFi, $drama], "Inglese"),
];


//APPLICO I VALORI DI DISCOUNTABLE 
// Oppenheimer
$movies[0]->price = 15;  //prezzo base
$movies[0]->discount = 3; //sconto

// Pulp Fiction
$movies[1]->price = 10;
$movies[1]->discount = 2;

// Inception
$movies[2]->price = 12;
$movies[2]->discount = 1;

// Interstellar
$movies[3]->price = 14;
$movies[3]->discount = 2;

// The Dark Knight
$movies[4]->price = 11;
$movies[4]->discount = 0;

// Blade Runner 2049
$movies[5]->price = 13;
$movies[5]->discount = 3;

