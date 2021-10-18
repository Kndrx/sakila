<?php
require_once "../layouts/header.php";
require '../databaseClass/autoloader.php';
autoloader::register();

?>

<div class="container">
    <h2>Rent a DVD</h2>
    <form method="post" action="rent.php">
        <?php 
            $query = new Customer();
            $getAll = $query->getAllCustomers();
        ?>
        <div class="form-row d-flex">
            <div class="form-group col-md-6">
                <label for="name">Customer</label>
                <select name="customers">
                <?php 
                foreach ($getAll as $customer) {
                    echo "<option>" . $customer['last_name'] . " " . $customer['first_name'] . "</option>";
                }
                ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="rentDate">Rent date</label>
                <input type="date" id="rentaldate">
            </div>
            <div class="justify-content-center">
                <button type="submit" class="btn btn-primary "> Rent </button>
            </div>
        </div>
    </form>

    <!-- Button trigger modal -->
    <div class="d-flex justify-content-end">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add a customer </button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form>
                <div class="form-row d-flex">
                    <div class="form-group col-md-6">
                        <label for="name">First name</label>
                        <input type="text" class="form-control" id="name" placeholder="John">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Last name</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Doe">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control" id="city" placeholder="johndoe@sakilacustomer.org">
                </div>
                <div class="form-row d-flex">
                    <div class="form-group col-md-6">
                        <label for="adress">Adress</label>
                        <input type="text" class="form-control" id="adress">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="store">Store</label>
                        <select name="store">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Rent</button>
                </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>

</div>
<?php require "../layouts/footer.php"; ?>