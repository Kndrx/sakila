<?php

class Customer extends Database {

    public function CreateCustomer() {

        $sql = "INSERT INTO customer";
    }

    public function getAllCustomers() {

        $sql = 'SELECT last_name, first_name FROM customer ORDER BY last_name ASC';
        $query = $this->connect()->query($sql);
        $query->execute();
        return $query->fetchAll();
    }
}