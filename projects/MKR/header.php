<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!-- Navigation -->
<nav id="navbarRegular" class="navbar navbar-inverse navbar-fixed-top navfix" role="navigation">
    <div class="container navfix">
        <div id="mobileNav">
            <div class="wrapper">
                <div class="nav languages">
                    <ul class="nav navbar-lang">
                        <li>
                            <a href="#">EST</a>
                        </li>
                        <li>
                            <a class="active" href="#">EN</a>
                        </li>
                        <li>
                            <a href="#">RUS</a>
                        </li>
                    </ul>
                </div>
                <nav class="mobileNav">
                    <ul class="nav text-center">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a class="<?= ($activePage == 'furniture') ? 'active':''; ?>" href="furniture.php">Furniture</a>
                        </li>
                        <li>
                            <a class="<?= ($activePage == 'sketchbooks') ? 'active':''; ?>" href="sketchbooks.php">Sketchbooks</a>
                        </li>
                        <li>
                            <a class="<?= ($activePage == 'woodturning') ? 'active':''; ?>" href="woodturning.php">Woodturning</a>
                        </li>
                        <li>
                            <a class="<?= ($activePage == 'about') ? 'active':''; ?>" href="about.php">About</a>
                        </li>
                        <li>
                            <a class="<?= ($activePage == 'contact') ? 'active':''; ?>" href="contact.php">Contact</a>
                        </li>
                        <li>
                            <a class="<?= ($activePage == 'cart') ? 'active':''; ?>"  href="cart.php">Shopping Cart</a>
                        </li>
                        <ul class="nav lang">
                            <li>
                                <a href="#">ENG</a>
                            </li>
                            <li>
                                <a class="lang-sep" href="#">EST</a>
                            </li>
                            <li>
                                <a class="lang-sep" href="#">RUS</a>
                            </li>
                        </ul>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="mobileMenuLink" class="text-center">
            <a>Menu</a>
        </div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a href="index.php"><img src="./img/logo.png" class="navbar-brand"/></a>
            <div class="text-right hidden-xs" style="padding-right: 100px">
                <!--<div class="shopping-cart">-->
                    <div class="nav languages">
                        <ul class="nav navbar-lang">
                            <li>
                                <a href="#">EST</a>
                            </li>
                            <li>
                                <a class="active" href="#">EN</a>
                            </li>
                            <li>
                                <a href="#">RUS</a>
                            </li>
                        </ul>
                    </div>
                    <!--<a href="cart.php" style="position: relative">
                        <img src="./img/shoppingcart.png" width="35" height="35"/>
                    </a>
                </div>-->

            </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav text-center">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a class="<?= ($activePage == 'furniture') ? 'active':''; ?>" href="furniture.php">Furniture</a>
                </li>
                <li>
                    <a class="<?= ($activePage == 'sketchbooks') ? 'active':''; ?>" href="sketchbooks.php">Sketchbooks</a>
                </li>
                <li>
                    <a class="<?= ($activePage == 'woodturning') ? 'active':''; ?>" href="woodturning.php">Woodturning</a>
                </li>
                <li>
                    <a class="<?= ($activePage == 'about') ? 'active':''; ?>" href="about.php">About</a>
                </li>
                <li>
                    <a class="<?= ($activePage == 'contact') ? 'active':''; ?>" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="navsep"/>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>