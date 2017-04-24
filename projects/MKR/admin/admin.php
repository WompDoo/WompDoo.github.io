<?php
session_start();
if(!isset($_SESSION['myusername'])){
    header("Location:./../login/");
}

include('./../controllers/inventory.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MKR Kild</title>

    <!-- Bootstrap Core CSS -->
    <link href="./../css/bootstrap.min.css" rel="stylesheet">
    <link href="./../css/semantic.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./../css/admin.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2>Lisa uus toode</h2>
            </div>
            <div class="modal-body">
                <div class="container-modal">
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong>Uue toote andmed</strong></div>
                        <div class="panel-body">

                            <!-- Standard Form -->
                                <form id="newProduct" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Product name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Select list (select one):</label>
                                        <select class="form-control" id="category" name="category">
                                            <option value="Furniture">Furniture</option>
                                            <option value="Sketchbooks">Sketchbooks</option>
                                            <option value="Woodturning">Woodturning</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Price" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number"  class="form-control" id="qty" name="qty" placeholder="Quantity in stock" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" type="textarea" id="description" name="description" placeholder="Product description" maxlength="140" rows="7"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-default create">Submit</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>




<nav id="adminNavbar" class="navbar navbar-default navbar-static-top topbar" role="admin">
    <div class="container-fluid">

        <div class="navbar-header">

            <a href="../admin/" class="navbar-brand">
                <span class="hidden-xs">MKR Kild<sup>Admin</sup></span>
            </a>
            <div class="ui buttons position">
                <button class="navbar-text ui inverted red button">
                    <a href="index.php">Home</a>
                </button>
                <button class="navbar-text ui inverted blue button">
                    <a href="furniture.php">Furniture</a>
                </button>
                <button class="navbar-text ui inverted green button">
                    <a href="sketchbooks.php">Sketchbooks</a>
                </button>
                <button class="navbar-text ui inverted orange button">
                    <a href="woodturning.php">Woodturning</a>
                </button>
                <button class="navbar-text ui inverted purple button">
                    <a href="about.php">About</a>
                </button>
                <button class="navbar-text ui inverted yellow button">
                    <a href="contact.php">Contact</a>
                </button>

            </div>
        </div>

        <div class="navbar-collapse collapse" id="navbar-collapse-main">


            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <button class="navbar-btn active" data-toggle="dropdown">
                        <img src="./../img/logo2.png" class="img-circle">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="./../login/logout.php">Logout</a></li>
                    </ul>
                </li>


            </ul>

        </div>
    </div>
</nav>

<article class="wrapper">

    <aside class="sidebar">
        <ul class="sidebar-nav">
            <li class="active"><a href="#dashboard" data-toggle="tab"><i class="glyphicon glyphicon-dashboard"></i>
                    <span>Dashboard</span></a></li>
        </ul>
    </aside>

    <section class="main">

        <section class="tab-content">

            <section class="tab-pane active fade in content" id="dashboard">

                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="panel panel-default">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <div class="panel-heading">
                                        <h4>
                                            <?php
                                            echo(fetchCategoryFurn());
                                            ?>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col col-xs-6 text-right">
                                    <button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-sm btn-primary btn-create">Create New</button>
                                </div>
                            </div>
                            <div class="panel panel-default panel-table">
                                <div id="furniture-dad" class="panel-body">
                                    <table id="furniture" class="table table-striped table-bordered table-list">
                                        <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Details</th>
                                            <th>Price</th>
                                            <th>Quantity/stock</th>
                                            <th class="text-center"><em class="glyphicon glyphicon-pencil"></em></th>
                                            <th class="text-center"><em class="glyphicon glyphicon-cog"></em></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        echo(fetchFurniture());
                                        ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                </div>

            </section>

        </section>



    </section>

</article>

<script src="./../js/jquery.js"></script>
<script src="./../js/main.js"></script>
<script src="./../js/semantic.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./../js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script src="./../js/carousel.js"></script>

</body>
