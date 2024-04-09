<!-- The priority of the view class is to format the content to be displayed to the end user.
It will retrieve data from the controller class if necessary and embed it into the html. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>

    <?php foreach ($products as $product): ?>
        <h2><?= htmlspecialchars($product['name']) ?></h2>
        <p><?= htmlspecialchars($product['description']) ?></p>

    <?php endforeach; ?>

</body>
</html>