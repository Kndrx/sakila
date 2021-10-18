<?php
require 'databaseClass/autoloader.php';
autoloader::register();

$query = new movie();
$search = $query->getMovieBySearch();

if($search){
    foreach($search as $row){
    ?>
        <a href='views/movie.php?id=<?php echo $row['film_id']; ?>' class='list-group-item list-group-item-action border-1'> <?php echo $row['title'] ?> </a>
    <?php
    }
}
else{
    echo "<p class='list-group-item border-1'>No movie</p>";
};
