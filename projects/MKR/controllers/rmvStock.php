<?php
require '../config.php';
{
    global $db;
    $id = $_POST['id'];
    $sql = "UPDATE product SET qty_stock = qty_stock - 1 WHERE product_id = $id";

// Write mysql query to fetch $sql
    $result = $db->query($sql);
    echo "1";
}