<?php

// Deals with data from the source
// And sends the desired data back to the controller
class Product
{
    public function getData(): array 
    {
        // Data Source Name
        $dsn = "mysql:host=localhost;dbname=product_db;charset=utf8;port=3306";

        // PHP Data Object
        // lightweight, consistent framework for accessing dbs
        $pdo = new PDO($dsn, "product_db_user", "secret", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        // Accessing method "query" of the pdo object
        $stmt = $pdo->query("SELECT * FROM product");

        // Returns an array indexed by column name as returned in the result set
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>