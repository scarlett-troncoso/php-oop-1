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

//var_dump($harryPotter);

//$harryPotter->setCast([ "Daniel Radcliffe", "Rupert Grint", "Emma Watson"]);

//create a second instance //Write values to each property of the object
$poorThings = new Movie('Poor Things', 'Poor Things.... Lorem ipsum dolor ecc', 90, [] );

$poorThings->setCast(["Emma Stone", "Mark Ruffalo", "Willem Dafoe", "Ramy Youssef", "Christopher Abbott", "Jerrod Carmichael"]); 

//var_dump($poorThings);

//var_dump($harryPotter->getCast());
//var_dump($poorThings->getCast());

$movies = [$harryPotter, $poorThings]

?>

<!doctype html>
<html lang="en">
    <head>
        <title>esercizio php-oop</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>
    </head>

    <body>
        <header class="bg-dark text-white p-2">
            <div class="container w-75">
                <h1>Movies</h1>
            </div>
            
        </header>
        <main>
            <section>
                <div class="container w-75">
                    <div class="row row-cols-1 row-cols-sm-3 g-3 mt-2">

                        <?php foreach($movies as $movie) : ?>
                            <div class="col">
                                <div class="card">  
                                    <div class="card-body">

                                        <h3><?= $movie->title; ?></h3>
                                        <p>Overview: <?= $movie->overview; ?></p>
                                        <span>Duration: <?= $movie->duration; ?> min.</span>
                                        
                                        <ul> Stars: 
                                            <?php foreach($movie->getCast() as $nameCast) : ?>
                                                <li> <?= $nameCast; ?> </li>
                                            <?php endforeach; ?>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </section>
        </main>
    </body>
</html>