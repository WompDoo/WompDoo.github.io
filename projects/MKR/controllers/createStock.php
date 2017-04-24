<?php
require '../config.php';
{
    $name = $_POST["name"];
    $price = $_POST["price"];
    $qty = $_POST["qty"];
    $description = $_POST["description"];
    $category = $_POST['category'];

    global $db;

    $sql = "INSERT INTO product (product_name, product_category, product_details, product_price, qty_stock)
VALUES ('$name', '$category', '$description', $price, $qty)";

// Write mysql query to fetch $sql
    $result = $db->query($sql);
    echo $result;
}