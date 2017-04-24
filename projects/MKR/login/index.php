<!DOCTYPE html>
<!-- saved from url=(0041)https://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>MKR Admin-site</title>

    <!-- Bootstrap core CSS -->
    <link href="./../css/bootstrap.min.css" rel="stylesheet">
    <link href="./../css/semantic.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./../css/signin.css" rel="stylesheet">


</head>

  <body>

    <div class="container">

      <form method="POST" action="checklogin.php" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="username" id="myusername" name="myusername" class="form-control" placeholder="Username" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="mypassword" name="mypassword" class="form-control" placeholder="Password" required="">
        <button id="button" name="submit" class="fluid ui button inverted blue " type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

</body></html>