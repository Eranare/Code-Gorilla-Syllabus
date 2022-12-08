<?php
$title = "Second Login screen";
include(__DIR__ . '/_bootstrap.php');
include(__DIR__ . '/_header.php');?>


<br>
<?php


if (!isset($_SESSION['authenticated_user'])) {
    header('Location: Public/Php Project Structure/login.php');

    $name = $_SESSION['message'] ?? "Anonymous";
    echo htmlspecialchars($name, ENT_QUOTES);


    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Secret</title>
</head>
<body><button style="position: absolute;"><a href="Public/Php Project Structure/logout.php">Log out</a></button>
<div class="matrix_Container" style = "overflow: hidden; display: inline;">
<iframe src="Matrix.php" name="targetframe" allowTransparency="true" scrolling="no" frameborder="0" width="950" height ="900" style= "text-align: center; ">
    </iframe>
</div>
<br>
<?php include(__DIR__ . '/_footer.php'); ?>