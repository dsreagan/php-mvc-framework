<?php

// We need to:
// 1. Get the correct variables from the path
// 2. Import the correct controller code
// 3. Establish an instance of the controller class
// 4. Call the correct method of the controller class to show the view

// 1
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require "src/router.php";
$router = new Router;
// Routing Table
// Getting controller and action from the path
$router->add('/mvc/home', ["controller" => "home", "action" => "index"]);
$router->add('/mvc/', ["controller" => "home", "action" => "index"]);
$router->add('/mvc/products', ["controller" => "products", "action" => "index"]);
$router->add('/mvc/products/show', ["controller" => "products", "action" => "show"]);

$params = $router->match($path);

if ($params === false) {
    exit("No route match found");
}

$controller = $params["controller"];
$action = $params["action"];
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