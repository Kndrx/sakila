<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CRUD using OOP PHP, Mysql & Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="http://localhost/bdd-sql-mysql-php-melissande-kendrick-tea-fabrice/public/style/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="prefetch" href="http://localhost/bdd-sql-mysql-php-melissande-kendrick-tea-fabrice/index.php">
    <link rel="prefetch" href="http://localhost/bdd-sql-mysql-php-melissande-kendrick-tea-fabrice/view/create-post.php">
    <link rel="prefetch" href="http://localhost/bdd-sql-mysql-php-melissande-kendrick-tea-fabrice/view/dashboard.php">
    <link rel="prefetch" href="http://localhost/bdd-sql-mysql-php-melissande-kendrick-tea-fabrice/view/login.php">
    <link rel="prefetch" href="http://localhost/bdd-sql-mysql-php-melissande-kendrick-tea-fabrice/view/registration.php">
    <link rel="prefetch" href="http://localhost/bdd-sql-mysql-php-melissande-kendrick-tea-fabrice/view/posts.php">
    <link rel="prefetch" href="http://localhost/bdd-sql-mysql-php-melissande-kendrick-tea-fabrice/view/create-post.php">
    <link rel="prefetch" href="http://localhost/bdd-sql-mysql-php-melissande-kendrick-tea-fabrice/view/update.php">
    <link rel="prefetch" href="http://localhost/bdd-sql-mysql-php-melissande-kendrick-tea-fabrice/view/delete.php">    
</head>
<body style="background:#3B5998;">
<div class="container min-vh-100 "style="background:white;">
<button type="button" class="btn btn-facebook-i btn-sm mt-1 position-fixed"
                        onclick="window.location.href='index.php'">Retour à l'accueil
                    </button>

<?php require_once 'dbconfig.php'; // database connection

    if(isset($_POST['search'])) // action to search categories posts by name
{ ?>
<?php
    // query for research by keyword
    $keyword = $_POST['keyword'];
	$query = $conn->prepare("SELECT posts.*, DATE(date) as date, users.firstname, categories.name FROM posts JOIN categories ON posts.Categories_id = categories.id JOIN users ON posts.Users_id = users.id WHERE categories.name LIKE '%$keyword%'");
	$query->execute();

    while($row = $query->fetch())
    { ?>
<div class="col-12 mx-auto" >
    <div class="container d-flex " style="background:white;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p class="text-uppercase mt-3" style="font-weight:bold;color:#adb5bd;"><?php echo $row['title']; ?></p>
                        <!-- POST TITLE -->
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <p class="text-capitalize mt-3" style="color:#ffbe0b;"><?php echo $row['name']; ?></p> <!-- CATEGORY NAME -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p class="text-uppercase" style="color:#3B5998;font-weight:bold;"><?php echo $row['firstname']; ?></p> <!-- USERS FIRSTNAME-->
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <p class="text-capitalize" style="color:#6b705c;font-size:13px;font-weight:bold;">
                            <?php echo $row['date']; ?>
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <p><?php echo $row['content']; ?>
                    </p>
                </div>
                <a href="view/post.php?id=<?php echo $row['id']; ?>" class="btn btn-success mb-3">Lire..</a>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php
    }
    ?>
<?php
}   
?>