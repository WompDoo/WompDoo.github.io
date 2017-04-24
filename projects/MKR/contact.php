<?php include("header.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MKR Kild | Contact Us</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS-->
    <link href="css/furniture.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Page Features -->
<div class="row text-left">
    <div class="col-md-4 col-md-offset-2">
        <form>
            <div class="row">
            <div class="form-group col-md-10 ">
                <label for="name" class="control-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-10">
                <label for="name" class="control-label">Email</label>
                <input type="username" class="form-control" id="username" name="username" placeholder="example@domain.com" value="">
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-10">
                <label for="name" class="control-label">Message</label>
                <textarea class="form-control" rows="4" name="message"></textarea>
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-10 text-right">
                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-default">
            </div>
            </div>
        </form>    
    </div>


    <div class="col-md-4" style="    padding-left: 100px;
    border: 1px;
    border-style: solid;
    border-right: 0px;
    border-top: 0px;
    border-bottom: 0px;">
        <div class="row">
            <div class="col-md-4">
                <img class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=259%C3%97375&w=100&h=100" alt="bla">
            </div>
            <div class="col-md-6">
                <h4>Name</h4>
                <text>A few words about the person</text>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <img class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=259%C3%97375&w=100&h=100" alt="bla">
            </div>
            <div class="col-md-6">
                <h4>Name</h4>
                <text>A few words about the person</text>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <img class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=259%C3%97375&w=100&h=100" alt="bla">
            </div>
            <div class="col-md-6">
                <h4>Name</h4>
                <p>A few words about the person</p>
            </div>
        </div>
    </div>    
</div>
<br>
<!-- /.row -->
<hr class="footsep">




<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<?php include("footer.php"); ?>

</body>

</html>
