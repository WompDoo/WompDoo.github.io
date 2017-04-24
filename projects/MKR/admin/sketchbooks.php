<?php include('./../header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MKR Kild | Sketchbooks</title>

    <!-- Bootstrap Core CSS and other frameworks -->
    <link href="./../css/bootstrap.min.css" rel="stylesheet">
    <link href="./../css/semantic.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./../css/furniture.css" rel="stylesheet">
    <link href="./../css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<button id="hiddenBtn" class="btn btnColor">
    <i class="glyphicon glyphicon-cog"></i>
</button>
<nav id="adminNavbar" class="navbar navbar-default navbar-static-top topbar" role="admin">
    <div class="container-fluid">

        <div class="navbar-header">

            <a href="../admin/" class="navbar-brand">
                <span class="hidden-xs">MKR Kild<sup>Admin</sup></span>
            </a>
            <div class="ui buttons position">
                <button class="navbar-text ui inverted red button">
                    <a data-toggle="modal" data-target="#myModal" class="sidebar-toggle">
                        Background
                    </a>
                </button>
                <button class="navbar-text ui inverted green button">
                    <a href="admin.php">Dashboard</a>
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
                        <li><a id="hideNav">Hide</a></li>
                        <li id="showNav" class="hidden"><a>Show</a></li>
                    </ul>
                </li>


            </ul>

        </div>
    </div>
</nav>

<!-- Page Features -->
<div class="row">
    <div class="col-md-12 text-center" style="padding-left: 100px; padding-right: 100px;">
        <div class="col-xs-6 col-md-4">
            <a href="product.php" class="img-responsive">
                <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=259%C3%97375&w=315&h=219" alt="bla">
                <figcaption>Product Name<br>
                    65.00$
                </figcaption>
            </a>
        </div>
        <div class="col-xs-6 col-md-4">
            <a href="product.php" class="img-responsive">
                <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=259%C3%97375&w=315&h=219" alt="bla">
                <figcaption>Product Name<br>
                    65.00$
                </figcaption>
            </a>
        </div>
        <div class="col-xs-6 col-md-4">
            <a href="product.php" class="img-responsive">
                <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=259%C3%97375&w=315&h=219" alt="bla">
                <figcaption>Product Name<br>
                    65.00$
                </figcaption>
            </a>
        </div>
    </div>
</div>
<br>
<br>

<div class="row">
    <div class="col-md-12 text-center" style="padding-left: 100px; padding-right: 100px;">
        <div class="col-xs-6 col-md-4">
            <a href="product.php" class="img-responsive">
                <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=259%C3%97375&w=315&h=219" alt="bla">
                <figcaption>Product Name<br>
                    65.00$
                </figcaption>
            </a>
        </div>
        <div class="col-xs-6 col-md-4">
            <a href="product.php" class="img-responsive">
                <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=259%C3%97375&w=315&h=219" alt="bla">
                <figcaption>Product Name<br>
                    65.00$
                </figcaption>
            </a>
        </div>
        <div class="col-xs-6 col-md-4">
            <a href="product.php" class="img-responsive">
                <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=259%C3%97375&w=315&h=219" alt="bla">
                <figcaption>Product Name<br>
                    65.00$
                </figcaption>
            </a>
        </div>
    </div>
</div>
<!-- /.row -->
<br>
<!-- /.row -->
<hr class="footsep">

<!-- jQuery -->
<script src="./../js/jquery.js"></script>
<script src="./../js/main.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./../js/bootstrap.min.js"></script>
<script src="./../js/semantic.min.js"></script>

<!-- Script to Activate the Carousel -->
<script src="./../js/carousel.js"></script>

<?php include("./../footer.php"); ?>

</body>

</html>
