<?php
/**
 * Class Movie
 */
class Movie{
    public $title;
    public $overview;
    public $duration;
    public $cast;
};

//create an instance of a class (an object) with the 'new' keyword
$harryPotter = new Movie;

//Write values to each property of the object
$harryPotter->title = 'Harry Potter';
$harryPotter->overview = 'Harry Potter Lorem ipsum dolor ecc';
$harryPotter->duration = 120;
$harryPotter->cast = 'Daniel Radcliff';

var_dump($harryPotter);


//create a second instance
$poorThings = new Movie;

//Write values to each property of the object
$poorThings->title = 'Poor Things';
$poorThings->overview = 'Poor Things.... Lorem ipsum dolor ecc';
$poorThings->duration = 90;
$poorThings->cast = 'Emma Stone';

var_dump($poorThings);




?>