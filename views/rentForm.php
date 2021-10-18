<?php
require_once "../layouts/header.php";
require '../databaseClass/autoloader.php';
autoloader::register();

?>

<div class="container">
    <form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="John">
        </div>
        <div class="form-group col-md-6">
            <label for="lastname">Last name</label>
            <input type="text" class="form-control" id="lastname" placeholder="Doe">
        </div>
    </div>
    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" placeholder="Nouméa">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="rentdate">Rent date</label>
            <input type="date" class="form-control" id="rentdate">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Rent</button>
    </form>
</div>
<?php require "../layouts/footer.php"; ?>
