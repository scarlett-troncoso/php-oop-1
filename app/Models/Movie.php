<?php 
/**
 * Class Movie
 */
class Movie{

    public static string $type = 'Current Movie'; //proprieta static

    /*public $title;
    public $overview;
    public $duration;
    public $genres;
    public $cast;*/ 

    public function __construct(public string $title, public string $overview, public int $duration, public Genre $genres, public array $cast) 
    {
        $this-> title = $title;
        $this-> overview = $overview;
        $this-> duration = $duration;
        //$this-> genres = $genres;
        $this-> cast = $cast;
    }

    public function setCast($cast){ //imposta un valore
        $this->cast = $cast;
    }

    public function getCast(){ //legge un valore
        return $this->cast;
    }

    public function getNoStaticType(){ //metodo 'normale' nel quale usiamo la proprietá statica
        return self::$type; //cosi con self:: puo leggere le proprietá di questa istanza 'Address' pero SOLO di quelle static
    }

    public static function getStaticType(){ //metodo statico che chiamiamo staticamente
        return self::$type;
    }
};

?>