<?php

include('connection.php');


$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='seeds' LIMIT 4");

$stmt->execute();


$seeds_products = $stmt->get_result();//[]





?>