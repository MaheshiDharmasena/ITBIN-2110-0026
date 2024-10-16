<?php
include 'DBConnect.php';

// Fetch products from the database
$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Products</title>
</head>
<body>

<h2>Available Products</h2>

<table border="1">
   <tr>
       <th>Name</th>
       <th>Description</th>
       <th>Price</th>
       <th>Image</th>
   </tr>
   <?php foreach ($products as $product): ?>
   <tr>
       <td><?php echo htmlspecialchars($product['name']); ?></td>
       <td><?php echo htmlspecialchars($product['description']); ?></td>
       <td><?php echo htmlspecialchars($product['price']); ?></td>
       <td><img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" width="100"></td>
   </tr>
   <?php endforeach; ?>
</table>

</body>
</html>
