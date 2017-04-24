<?php
include('./../config.php');

//$id = $_GET['id'];
//$id = !empty($_GET['id']) ? [] : explode(',', $_GET['id']);

/*$qry = "SELECT product_id, product_name, product_details, product_price FROM product";


$result = $db->query($qry);

if (mysqli_num_rows($result) > 0) { //Run Loop
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['product_id'];
        $name = $row['product_name'];
        $price = $row['product_price'];
        $details = $row['product_details'];
        //$img = $row['image_path'];
        //echo "Product:  $name ($productid) <br />";
    } //close Loop
} else {
    echo "0 results";
}


mysqli_free_result($result);*/

function fetchFurniture()
{
    global $db;

    $sql = "SELECT product_id, product_name, product_category, product_details, product_price, qty_stock FROM product";

// Write mysql query to fetch $sql
    $result = $db->query($sql);

    while ($row = $result->fetch_assoc()) {

        $rows[] = $row;

    }

// Create BS grid view for the results
    foreach ($rows as $row) {
        $id = $row['product_id'];
        $name = $row['product_name'];
        $price = $row['product_price'];
        $details = $row['product_details'];
        $qty = $row['qty_stock'];

        echo "
        <tr data-id='$id'>

                                            <td>
                                                $name
                                            </td>
                                            <td>
                                                $details
                                            </td>
                                            <td>
                                                $price €
                                            </td>
                                            <td class='qty'>
                                                $qty    
                                            </td>
                                            <td align=\"center\">
                                                <a class=\"btn btn-success text-right add\"><em class=\"glyphicon glyphicon-plus\"></em></a>
                                                <a class=\"btn btn-danger text-right remove \"><em class=\"glyphicon glyphicon-minus\"></em></a>
                                            </td>
                                            <td align=\"center\">
                                                <a  class=\"btn btn-danger text-right destroy\"><em class=\"glyphicon glyphicon-trash\"></em></a>
                                            </td>
                                        </tr>
        
        
        
        
        ";
    }


    $result->close();
}

function fetchCategoryFurn()
{
    global $db;

    $sql = "SELECT DISTINCT product_category FROM product";

// Write mysql query to fetch $sql
    $result = $db->query($sql);


// Create BS grid view for the results
    if (mysqli_num_rows($result) > 0) { //Run Loop
        while($row =mysqli_fetch_array($result)) {
            $category[] = $row['product_category'];
        }
        echo "$category[0]";

    }
    $result->close();
}

function fetchCategorySket()
{
    global $db;

    $sql = "SELECT DISTINCT product_category FROM product";

// Write mysql query to fetch $sql
    $result = $db->query($sql);


// Create BS grid view for the results
    if (mysqli_num_rows($result) > 0) { //Run Loop
        while($row =mysqli_fetch_array($result)) {
            $category[] = $row['product_category'];
        }
        echo "$category[1]";

    }
    $result->close();
}

function fetchCategoryWood()
{
    global $db;

    $sql = "SELECT DISTINCT product_category FROM product";

// Write mysql query to fetch $sql
    $result = $db->query($sql);


// Create BS grid view for the results
    if (mysqli_num_rows($result) > 0) { //Run Loop
        while($row =mysqli_fetch_array($result)) {
            $category[] = $row['product_category'];
        }
        echo "$category[2]";

    }
    $result->close();
}


function addStock()
{
    global $db;
    $id = $_GET['id'];
    $sql = "UPDATE product SET qty_stock = qty_stock + 1 WHERE product_id = '$id'";

// Write mysql query to fetch $sql
    $result = $db->query($sql);

    $result->close();
}

