<?php 
require_once __DIR__ . '/../app/Models/Movie.php';
require_once __DIR__ . '/../app/Models/Genre.php';

//$movies = [$harryPotter, $poorThings]

$movies = [
    new Movie('Harry Potter', 'Harry Potter Lorem ipsum dolor ecc', 120,
        [ 
        new Genre('Molto Drammatico', 'fastastico'), // questa é una instanza dentro un array
        new Genre('Molto fantasioso', 'molto-ecc'),
        ], 
        [
        "Daniel Radcliffe", 
        "Rupert Grint", 
        "Emma Watson"
    ]),
    new Movie('Poor Things', 'Poor Things.... Lorem ipsum dolor ecc', 90,
        [ 
        new Genre('Molto Drammatico', 'fastastico'), // questa é una instanza dentro un array
        new Genre('Molto fantasy', 'molto-ecc'),
        ], 
        [
        "Emma Stone", 
        "Mark Ruffalo", 
        "Willem Dafoe", 
        "Ramy Youssef", 
        "Christopher Abbott", 
        "Jerrod Carmichael"
    ] )
    ]

?>