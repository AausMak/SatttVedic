<?php

include('connection.php');


$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='herbes' LIMIT 4");

$stmt->execute();


$herbes_products = $stmt->get_result();//[]





?>