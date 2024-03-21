<?php
/**
 * Class Movie
 */
class Movie{
    public $title;
    public $overview;
    public $duration;
    public $cast;

    public function __construct($title, $overview, $duration, $cast)
    {
        $this-> title = $title;
        $this-> overview = $overview;
        $this-> duration = $duration;
        $this-> cast = $cast;
    }

};

//create an instance of a class (an object) with the 'new' keyword
$harryPotter = new Movie('Harry Potter', 'Harry Potter Lorem ipsum dolor ecc', 120, []);

//Write values to each property of the object
$harryPotter->title = 'Harry Potter';
$harryPotter->overview = 'Harry Potter Lorem ipsum dolor ecc';
$harryPotter->duration = 120;
$harryPotter->cast = [ "Daniel Radcliffe", "Rupert Grint", "Emma Watson"];

var_dump($harryPotter);


//create a second instance
$poorThings = new Movie('Poor Things', 'Poor Things.... Lorem ipsum dolor ecc', 90, [] );

//Write values to each property of the object
$poorThings->title = 'Poor Things';
$poorThings->overview = 'Poor Things.... Lorem ipsum dolor ecc';
$poorThings->duration = 90;
$poorThings->cast = ["Emma Stone", "Mark Ruffalo", "Willem Dafoe", "Ramy Youssef", "Christopher Abbott", "Jerrod Carmichael"];

var_dump($poorThings);




?>