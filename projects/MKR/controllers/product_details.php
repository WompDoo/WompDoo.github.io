<?php

include('./config.php');

//$db = new PDO('mysql:host=localhost;dbname=MKR', DATABASE_USERNAME, DATABASE_PASSWORD);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'];
//$id = !empty($_GET['id']) ? [] : explode(',', $_GET['id']);

$qry = "SELECT product.product_id, product_name, product_details, qty_stock, product_price, productimage.image_path FROM product JOIN productimage ON product.product_id = productimage.product_id
WHERE product.product_id = '$id'";


$result = $db->query($qry);

if (mysqli_num_rows($result) > 0) { //Run Loop
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['product_name'];
        $price = $row['product_price'];
        $details = $row['product_details'];
        $quantity = $row['qty_stock'];
        $img = $row['image_path'];
    } //close Loop
} else {
    echo "0 results";
}

mysqli_free_result($result);


function createCarousel()
{
    $id = $_GET['id'];

    global $db;

    $sql = "SELECT  DISTINCT productimage.image_path FROM productimage JOIN product on product.product_id=productimage.product_id 
WHERE product.product_id='$id'";

    $res = $db->query($sql);

    $rowcount = mysqli_num_rows($res);


    if ($rowcount > 0) { //Run Loop
        while ($row = mysqli_fetch_array($res)) {
            $thumb[] = $row['image_path'];
        }

        for ($i = 0; $i < $rowcount; $i++) {

           // $x = $valid ? 'yes' : 'no'
            $item_class = ($i == 0) ? 'item active' : 'item';
            echo "<div class='$item_class data-slide-number=$i'>
                                    <img src='$thumb[$i]'></div>";

        }
    }
    $res->close();
}

    function createThumdnail()
    {
        $id = $_GET['id'];

        global $db;

        $sql = "SELECT  DISTINCT productimage.image_path FROM productimage JOIN product on product.product_id=productimage.product_id 
WHERE product.product_id='$id'";

        $res = $db->query($sql);

        $rowcount = mysqli_num_rows($res);

        if ($rowcount > 0) { //Run Loop
            while ($row = mysqli_fetch_array($res)) {
                $thumb[] = $row['image_path'];
            }

            for ($i = 0; $i < $rowcount; $i++) {

                echo "
                    <li class='col-sm-2'>
                        <a class='thumbnail' id='carousel-selector-$i'><img src='$thumb[$i]'></a>
                    </li>
            ";

            }
        }
    }
