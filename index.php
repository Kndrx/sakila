<?php

require "layouts/header.php";
require 'databaseClass/autoloader.php';
autoloader::register();

$query = new movie();
$movies = $query->getAllMovies();

$search = $query->getMovieBySearch();


?>
<!-- <?php include("layouts/navbar.php");?> -->

<!-- img for parallax effect-->
<section>

    <img src="img/bg.jpg" alt="background" id="bg">
    <img src="img/moon.png" alt="moon" id="moon">
    <img src="img/mountain.png" alt="mountain" id="mountain">
    <img src="img/road.png" alt="road" id="road">

    <header>
        <div>
            <h2 id="text">Sakila</h2>
            <div class="d-flex justify-content-center">
                <a href="#title">
                    <button class="btn btn-primary me-1" type="button" id="btn_index">Rent a dvd</button>
                </a>
            </div>
        </div>
    </header>
</section>


<div class="container justify-content-center">
    <!-- Search bar -->
    <div class="m-5">
        <div class="justify-content-center d-flex">
            <h1 id="title">SAKILA LOCATION</h1>
        </div>
        <div class="justify-content-center d-flex m-2">
            <h5>Search your dvd</h5>
        </div>

        <form method="post" action="details.php">
            <div class="input-group">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" id="search"/>
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </div>
        </form>
        <div class="col-md-5">
            <div class="list-group" id="showlist">
            </div>
        </div>
        <div></div>
    </div>
    <!-- show film in card -->
    <div id="display"></div>
    <div class="row">
        <?php foreach ( $movies as $film) : ?>
            <div class="col-sm-3">
                <div class="card m-3" style="width: 18rem;">
                    <h4 class="card-title text-center"><?php echo $film['title']?></h4>
                    <h6 class="card-subtitle mb-2 text-muted">Release year : <?php echo $film['release_year'] ?></h6>
                    <p class="card-text">Synopsys : <?php echo $film['description'] ?></p>
                    <p class="card-text">Rating : <?php echo $film['rating'] ?></p>
                    <a href="views/movie.php?id=<?php echo $film['film_id']; ?>" class="card-link">Réservez ce film</a>
                </div>
            </div>
            
        <?php endforeach; ?>
    </div>
</div>

<?php require "layouts/footer.php"; ?>