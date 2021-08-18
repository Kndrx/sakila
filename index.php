<?php require_once 'dbconfig.php';
include("layouts/header.php");


$film = $conn->query('SELECT * FROM film ORDER BY title ASC');
$film->setFetchMode(PDO::FETCH_OBJ);

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
                <a href="#searchbar">
                    <button class="btn btn-primary me-1" type="button" id="btn_index">Chercher une location</button>
                </a>
            </div>
        </div>
    </header>
</section>


<div class="container justify-content-center m-5">
    <!-- Search bar -->
    <form action="">
        <div class="input-group">
            <input id="searchbar" type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
        </div>
    </form>
    <!-- show film in card -->
    <?php
    foreach( $films as $film ) // on récupère la liste des membres
    {
            echo 'Utilisateur : '.$ligne->title.'<br />'; // on affiche les membres
    }
    $film->closeCursor();
    ?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
</div>
<?php include("layouts/footer.php");?>