<?php

include('connection.php');


$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='spices' LIMIT 4");

$stmt->execute();


$spices = $stmt->get_result();//[]





?>