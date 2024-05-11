<!-- http://localhost/php-projects/mvc/index.php -->

<?php
// We need to:
// 1. Get the correct variables from the query string
// 2. Import the correct controller code
// 3. Establish an instance of the controller class
// 4. Call the correct method of the controller class to show the view

// 1
$action = $_GET['action'];
$controller = $_GET['controller'];
// 2
require "src/controllers/$controller.php";
// 3
$controller_object = new $controller;
// 4
$controller_object->$action();



// Above is the simpler version of the below code
/*
// 2 & 3
if ($controller === "products" ) {
    
    require "src/controllers/products.php";
    
    $controller_object = new Products;
} elseif ($controller === "home") {

    require "src/controllers/home.php";

    $controller_object = new Home;
}

// 4
if ($action === "index") {

    $controller_object->index();

} elseif ($action === "show") {

    $controller_object->show(); 
}
*/

// Closing php tag omitted from files only containg php