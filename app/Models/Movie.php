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

?>