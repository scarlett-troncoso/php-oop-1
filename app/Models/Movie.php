<?php 

/**
 * Class Movie
 */
class Movie{
    public $title;
    public $overview;
    public $duration;
    public $genres;
    public $cast;

    public function __construct($title, $overview, $duration, array $genres, $cast)
    {
        $this-> title = $title;
        $this-> overview = $overview;
        $this-> duration = $duration;
        $this-> genres = $genres;
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