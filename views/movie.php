<?php 

require_once "../layouts/header.php";
require '../databaseClass/autoloader.php';
autoloader::register();

$id = $_GET['id'];
$query = new movie();

$movie = $query->getMovieById($id);

?>

<div class="row">
    <div class="col-sm-3">
        <div class="card m-3" style="width: 18rem;">
            <h4 class="card-title text-center"><?= $movie['title']?></h4>
            <h6 class="card-subtitle mb-2 text-muted">Release year : <?php echo $movie['release_year'] ?></h6>
            <p class="card-text">Synopsys : <?php echo $movie['description'] ?></p>
            <p class="card-text">Rating : <?php echo $movie['rating'] ?></p>
            <a href="rentForm.php" class="card-link">Rent this dvd</a>
        </div>
    </div>
    </div>

<?php require "../layouts/footer.php"; ?>


