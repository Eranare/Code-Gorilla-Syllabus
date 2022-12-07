<?php
session_start();

if (!isset($_SESSION['authenticated_user'])) {
    header('Location: Public/Authentication/login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Secret</title>
</head>
<body><button style="position: absolute;"><a href="Public/Authentication/logout.php">Log out</a></button>
<div class="zelda_Container" style = "overflow: hidden; display: inline;">
<iframe src="../Oefeningen/Zelda game tut/Gamescreen.html" name="targetframe" allowTransparency="true" scrolling="no" frameborder="0" width="950" height ="900" style= "text-align: center; ">
    </iframe>
</div>
</body>
</html>