<?php
include('./controllers/cart.php');
include('./header.php');
?>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="description" content="">
        <meta name="author" content="">

        <title>MKR Kild</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="./css/main.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
                <div id="shopping-cart" class="col-md-8">
                    <div class="txt-heading"><h2>Shopping Cart </h2><a id="btnEmpty" href="cart.php?action=empty">Empty
                            Cart</a></div>
                    <?php
                    if (isset($_SESSION["cart_item"])) {
                        $item_total = 0;
                        ?>
                        <table cellpadding="10" cellspacing="1" class="table table-responsive">
                            <tbody>
                            <tr>
                                <th><strong>Name</strong></th>
                                <th><strong>Quantity</strong></th>
                                <th><strong>Price</strong></th>
                                <th><strong>Action</strong></th>
                            </tr>
                            <?php
                            foreach ($_SESSION["cart_item"] as $item) {
                                ?>
                                <tr>
                                    <td>
                                        <strong><?php echo $item["product_name"]; ?></strong></td>
                                    <td><?php echo $item["quantity"]; ?></td>
                                    <td><?php echo "€" . $item["product_price"]; ?></td>
                                    <td><a
                                                href="cart.php?action=remove&product_code=<?php echo $item["product_code"]; ?>"
                                                class="btnRemoveAction">Remove Item</a></td>
                                </tr>
                                <?php
                                $item_total += ($item["product_price"] * $item["quantity"]);
                            }
                            ?>

                            <tr>
                                <td colspan="5" align=right><strong>Total:</strong> <?php echo "€" . $item_total; ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <?php
                    }
                    ?>
            </div>
        </div>
    </div>
    <hr class="footsep"/>
    <br>
    <!-- /.row -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


    </body>

<?php
include('footer.php');
?>