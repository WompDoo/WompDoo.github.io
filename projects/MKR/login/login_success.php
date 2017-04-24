<?php
session_start();
if (!isset($_SESSION['myusername'])) {
}
header('location: ../admin/admin.php')
?>

<html>
<body>
Login successful.

</body>
</html>