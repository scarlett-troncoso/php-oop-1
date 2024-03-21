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

    public function setCast($cast){ //imposta un valore
        $this->cast = $cast;
    }

    public function getCast(){ //legge un valore
        return $this->cast;
    }
};

//create an instance of a class (an object) with the 'new' keyword //Write values to each property of the object
$harryPotter = new Movie('Harry Potter', 'Harry Potter Lorem ipsum dolor ecc', 120, []);

$harryPotter->setCast(["Daniel Radcliffe", "Rupert Grint", "Emma Watson"]); 

var_dump($harryPotter);

//$harryPotter->setCast([ "Daniel Radcliffe", "Rupert Grint", "Emma Watson"]);

//create a second instance //Write values to each property of the object
$poorThings = new Movie('Poor Things', 'Poor Things.... Lorem ipsum dolor ecc', 90, [] );

$poorThings->setCast(["Emma Stone", "Mark Ruffalo", "Willem Dafoe", "Ramy Youssef", "Christopher Abbott", "Jerrod Carmichael"]); 

var_dump($poorThings);

//var_dump($harryPotter->getCast());
//var_dump($poorThings->getCast());





?>