<?php

include_once(__DIR__.'./../config.php');

function fetchFurniture()
{
    global $db;

    $sql = "SELECT image_path, product.product_id, product.product_name, product.product_price, product.product_category FROM productimage
 JOIN product
    ON product.product_id = productimage.product_id
GROUP BY productimage.product_id;
";

// Write mysql query to fetch $sql
    $result = $db->query($sql);

    while ($row = $result->fetch_assoc()) {

        $rows[] = $row;

    }

// Create BS grid view for the results
    foreach ($rows as $row) {
        $id = $row['product_id'];

        echo "<div class=\"col-6 col-md-4\">
               <a href='./product.php?id=$id'>
               <img class='productimg' src='$row[image_path]' alt='Wooden products by MKR Kild' />
                <figcaption>$row[product_name] <br>
                 $row[product_price]€ </figcaption>
            </a>
        </div>";
    }

    $result->close();
}