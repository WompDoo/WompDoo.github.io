<?php
session_start();
if (!isset($_SESSION['myusername'])) {
    header("Location:./../login/");
}
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

    <!-- Bootstrap Core CSS and other frameworks -->
    <link href="./../css/bootstrap.min.css" rel="stylesheet">
    <link href="./../css/semantic.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./../css/fix.css" rel="stylesheet">
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

<!-- Navigation -->
<nav id="navbarRegular" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div id="mobileNav">
            <div class="wrapper">
                <nav class="mobileNav">
                    <ul class="nav text-center">
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                        <li>
                            <a href="furniture.php">Furniture</a>
                        </li>
                        <li>
                            <a href="furniture.php">Sketchbooks</a>
                        </li>
                        <li>
                            <a href="furniture.php">Woodturning</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <ul class="nav lang visible-xs">
                            <li>
                                <a href="#">ENG</a>
                            </li>
                            <li>
                                <a class="lang-sep" href="#">EST</a>
                            </li>
                            <li>
                                <a class="lang-sep"  href="#">RUS</a>
                            </li>
                        </ul>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="mobileMenuLink" class="text-center">
            <a>Menu</a>
        </div>

        <div class="navbar-header">
            <a href="#"><img src="./../img/logo.png" class="navbar-brand"/></a>
            <div class="nav languages hidden-xs">
                <div class="row">
                    <ul class="nav navbar-lang">
                        <li>
                            <a href="#">EST</a>
                        </li>
                        <li>
                            <a class="active" href="#">EN</a>
                        </li>
                        <li>
                            <a  href="#">RUS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--<div class="shopping-cart">
                <div class="layer"><a href="cart.php" style="position: relative">
                        <img src="./img/shoppingcart.png" width="35" height="35"/>
                    </a>
                </div>
            </div>-->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav text-center">
                <li>
                    <a class="active" href="#">Home</a>
                </li>
                <li>
                    <a href="furniture.php">Furniture</a>
                </li>
                <li>
                    <a href="sketchbooks.php">Sketchbooks</a>
                </li>
                <li>
                    <a href="woodturning.php">Woodturning</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="navsep"/>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-modal">
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong>Laadi ülesse pilte</strong></div>
                        <div class="panel-body">

                            <!-- Standard Form -->
                            <h4>Vali arvutist failid</h4>
                            <form method="post" enctype="multipart/form-data" id="js-upload-form">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <input type="file" name="file[]" id="js-upload-files" multiple>
                                    </div>
                                    <button type="submit" class="ui button inverted blue" id="js-upload-submit"
                                            name="submit">Upload files
                                    </button>
                                </div>

                                <!-- Drop Zone -->
                                <h4>Või tõsta failid lihtsalt siia</h4>
                                <div class="upload-drop-zone" id="drop-zone">
                                    Lohista pilt siia
                                </div>
                            </form>
                            <div class="js-upload-finished">
                                <h3>Üleslaaditud pildid</h3>
                                <div class="col-md-12 text-center">
                                    <div class="col-xs-6 col-md-3">
                                        <img src="https://placeholdit.imgix.net/~text?txtsize=12&txt=259%C3%97375&w=100&h=60"
                                             alt="bla">
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <img src="https://placeholdit.imgix.net/~text?txtsize=12&txt=259%C3%97375&w=100&h=60"
                                             alt="bla">
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <img src="https://placeholdit.imgix.net/~text?txtsize=12&txt=259%C3%97375&w=100&h=60"
                                             alt="bla">
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <img src="https://placeholdit.imgix.net/~text?txtsize=12&txt=259%C3%97375&w=100&h=60"
                                             alt="bla">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="ui inverted red button" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<!-- Full Page Image Background Carousel Header -->
<header id="myCarousel" class="carousel slide">

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('./../img/moobel.JPG');"></div>
            <div class="carousel-caption">
                <!--<h2>Caption 1</h2>-->
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('./../img/markmik.JPG');"></div>
            <div class="carousel-caption">
                <!--<h2>Caption 1</h2>-->
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('./../img/kurikas.JPG');"></div>
            <div class="carousel-caption">
                <!--<h2>Caption 1</h2>-->
            </div>
        </div>

    </div>

</header>


<footer class="footer">
    <div class="row">
        <div class="group-social col-md-4 col-md-offset-5 text-center">
            <div class="col-xs-6 col-md-2">
                <a href="https://www.facebook.com/MKRKILD/">
                    <img src="./../img/facebook.png" width="30" height="30"/>
                </a>
            </div>
            <div class="socialborder col-xs-6 col-md-2">
                <a href="#">
                    <img src="./../img/instagram.png" width="28" height="28"/>
                </a>
            </div>
            <div class="socialborder col-xs-6 col-md-2">
                <a href="#">
                    <img src="./../img/google.png" width="33" height="25"/>
                </a>
            </div>
        </div>
    </div>
</footer>

<script src="./../js/jquery.js"></script>
<script src="./../js/main.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./../js/bootstrap.min.js"></script>
<script src="./../js/semantic.min.js"></script>

<!-- Script to Activate the Carousel -->
<script src="./../js/carousel.js"></script>


</body>

</html>
