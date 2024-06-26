<?php
require_once __DIR__ . '/app/Models/Movie.php';
require_once __DIR__ . '/database/db.php';

//create an instance of a class (an object) with the 'new' keyword //Write values to each property of the object
//$harryPotter = new Movie('Harry Potter', 'Harry Potter Lorem ipsum dolor ecc', 120, []);

//$harryPotter->setCast(["Daniel Radcliffe", "Rupert Grint", "Emma Watson"]); 

//var_dump($harryPotter);

//$harryPotter->setCast([ "Daniel Radcliffe", "Rupert Grint", "Emma Watson"]);

//create a second instance //Write values to each property of the object
//$poorThings = new Movie('Poor Things', 'Poor Things.... Lorem ipsum dolor ecc', 90, [] );

//$poorThings->setCast(["Emma Stone", "Mark Ruffalo", "Willem Dafoe", "Ramy Youssef", "Christopher Abbott", "Jerrod Carmichael"]); 

//var_dump($poorThings);

//var_dump($harryPotter->getCast());
//var_dump($poorThings->getCast());

//$movies = [$harryPotter, $poorThings]

// Read a static property from the outside
//var_dump(Movie::$type); 
?>

<!doctype html>
<html lang="en">
    <head>
        <title>esercizio php-oop1</title>
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
                                        
                                        <ul class="list-unstyled"> Stars: 
                                            <?php foreach($movie->cast as $nameCast) : ?> 
                                            <!--foreach($movie->getCast() as $nameCast)--> <!-- cosi sarebbe nell caso i nostri cast siamo rimasti in setCast-->
                                                <li class="px-3"> <?= $nameCast; ?> </li>
                                            <?php endforeach; ?>
                                        </ul>

                                        <span>Type: <?= $movie::$type; ?></span>

                                    </div>

                                    <div class="card-footer">
                                        <ul class="d-flex gap-1 list-unstyled"> Genres: 
                                            <?php foreach($movie->genres->names as $genre) : ?> <!--prendo, movie, di movie prenso genres di genres prendo names(che é il parametro dentro Genre)-->
                                                <li> <?= $genre ?> </li>
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