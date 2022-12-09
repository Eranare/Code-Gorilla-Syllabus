<?php
$title = $title ?? 'PHP for the Web';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="/opdrachten/Code-Gorilla-Syllabus/pages/Module 3/Public/bootstrap.min.css">
    <title><?php echo htmlspecialchars($title, ENT_QUOTES); ?></title>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
<ul class="navbar-nav">
    <li class="nav-item"><a class="nav-link"  href="/opdrachten/code-gorilla-syllabus/pages/Module 3/Public/index.php">Homepage</a></li>
    <li class="nav-item"><a class="nav-link" href="/opdrachten/code-gorilla-syllabus/pages/Module 3//travel agency crud/pages/list_tours.php">List tours</a></li>
</ul>
</nav>
<ul>

<?php
if (isset($_SESSION['authenticated_user'])) {
    ?>
    <li>You are logged in as: 
         <?php echo $_SESSION['authenticated_user']; ?>
    </li>
    <li><a href="/opdrachten/Code-Gorilla-Syllabus/pages/Module 3/Public/Php Project Structure/logout.php">Log out</a></li>
    <?php
}
else {
    ?>
    <li><a href="/opdrachten/Code-Gorilla-Syllabus/pages/Module 3/Public/Php Project Structure/login.php">Log in</a></li>
    <?php
}
?>
</ul>
<?php include(__DIR__ . '/../_flash_message.php');?>