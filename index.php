<?php require_once 'dbconfig.php';
include("layouts/header.php");


$movie = $conn->query('SELECT * FROM film ORDER BY title ASC');
$movie->setFetchMode(PDO::FETCH_OBJ);

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


<div class="container justify-content-center m-5">
    <!-- Search bar -->
    <div class="m-5">
        <div class="justify-content-center d-flex">
            <h1 id="title">SAKILA LOCATION</h1>
        </div>
        <div class="justify-content-center d-flex m-2">
            <h5>Search your dvd</h5>
        </div>

        <form action="details.php" method="post">
            <div class="input-group">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" />
                <button type="submit" class="btn btn-outline-primary">search</button>
            </div>
        </form>
    </div>
    <!-- show film in card -->
    <div class="row">
        <?php foreach ( $movie as $film) : ?>
            <div class="col-sm-3">
                <div class="card m-3" style="width: 18rem;">
                    <h4 class="card-title text-center"><?php echo $film->title ?></h4>
                    <h6 class="card-subtitle mb-2 text-muted">Année de sortie : <?php echo $film->release_year ?></h6>
                    <p class="card-text">Synopsys : <?php echo $film->description ?></p>
                    <p class="card-text">Note : <?php echo $film->rating ?></p>
                    <a href="views/film" class="card-link">Réserv</a>
                </div>
            </div>
            
        <?php endforeach; ?>
    </div>
</div>
<?php include("layouts/footer.php");?>