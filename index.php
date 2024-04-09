<!-- http://localhost/php-projects/mvc/index.php -->

<?php

// Import the controller code
require "src/controllers/products.php";

// Establish an instance of the controller class
$controller = new Products;

// Call the index method of the controller class as an entry into the application
$controller->index();

// Closing php tag omitted from files only containg php