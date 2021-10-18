<?php

include_once 'autoloader.php';
autoloader::register();

class movie extends database {

    public function getAllMovies() {
        
        
        $sql = "SELECT * FROM film ORDER BY title ASC";
        $query = $this->connect()->query($sql);
        $query->execute();
        return $query->fetchAll();

    }

    public function getMovieById($id) {

        $sql = "SELECT * FROM film WHERE film_id = $id";
        $query = $this->connect()->query($sql);
        $query->execute();
        return $query->fetch();
    }

    public function getMovieBySearch() {

        if (isset($_POST['query'])) {
            $str = $_POST['query'];

        $sql = "SELECT * from film WHERE title LIKE :movie LIMIT 5 ";
        $query = $this->connect()->prepare($sql);
        $query->execute(['movie' => '%' . $str . '%']);
        return $query->fetchAll();
    }
    }
}