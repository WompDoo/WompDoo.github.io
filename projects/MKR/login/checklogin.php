<?php
session_start();
require ('../config.php');

$stmt = $db->prepare('SELECT * FROM user WHERE username=? and password=?');
$stmt->bind_param('ss', $myusername, $mypassword);
// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

$stmt->execute();

$result = $stmt->get_result();
if ($row = $result->fetch_assoc()) {
    $_SESSION['myusername']=$myusername;
    $_SESSION['mypassword']=$mypassword;
    header("location:login_success.php");
    $stmt->close();
}
else {
    echo "Vale kasutajatunnus või parool!";
}

