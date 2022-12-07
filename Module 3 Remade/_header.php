<?php
$title = $title ?? 'PHP for the Web';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="/opdrachten/Code-Gorilla-Syllabus/Module 3/Public/bootstrap.min.css">
    <title><?php echo htmlspecialchars($title, ENT_QUOTES); ?></title>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
<ul class="navbar-nav">
    <li class="nav-item"><a class="nav-link"  href="../index.php">Homepage</a></li><br>
    <li class="nav-item"><a href="public/Forms/random.php"> Name1 </a></li><br>
    <li class="nav-item"><a href="public/Forms/random.php"> Name2 </a></li>
    <li class="nav-item"><a href="public/Forms/random.php"> Name3 </a></li>
    <li class="nav-item"><a href="public/Forms/random.php"> Name4</a></li>
</ul>
</nav>
<ul>
<?php
if (isset($_SESSION['authenticated_user'])) {
    ?>
    <li>You are logged in as: 
         <?php echo $_SESSION['authenticated_user']; ?>
    </li>
    <li><a href="../logout.php">Log out</a></li>
    <?php
}
else {
    ?>
    <li><a href="../login.php">Log in</a></li>
    <?php
}
?>
<li>empty lis</li>
    <li>lis</li>

</ul>


<?php include(__DIR__ . '/_flash_message.php');?>