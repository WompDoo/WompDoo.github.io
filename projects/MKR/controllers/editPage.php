<?php

$editedContent = $_POST['val'];
$myfile = fopen('./../admin/editedpage.php', "w+") or die("Unable to open file!");
$functionStart = ("<?php
function saveEdits() {
            echo'"
);
$functionEnd = ("'; 
}");
fwrite($myfile, $functionStart .$editedContent. $functionEnd);
fclose($myfile);
