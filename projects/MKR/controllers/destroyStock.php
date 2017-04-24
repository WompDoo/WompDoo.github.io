<?php
require '../config.php';
{
    global $db;
    $id = $_POST['id'];
    $sql = "DELETE FROM product WHERE product_id = $id";

// Write mysql query to fetch $sql
    $result = $db->query($sql);
    echo "1";
}