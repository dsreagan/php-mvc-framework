<?php
// The controller class handles content delivery to the end user
// This involves requesting data from the model class and sending that data to the view class
// So it can be displayed to the end user in the desired way
// Think of the controller as the manager of the other components
class Products
{
    public function index()
    {
        // Import the model code
        require "src/models/product.php";

        // Establish an instance of the model class
        $model = new Product;

        // Call the "getData" method to retrieve product data from the database
        $products = $model->getData();

        // Import the view code
        // So this require statement is basically just appending that code to this file
        require "views/products_index.php";
    }

    public function show()
    {
        require "views/products_show.php";
    }
}

// This controller class file now only contains php, no html. 
// Demonstrating a separation on concerns.