<?php
$title = $title ?? 'PHP for the Web';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo htmlspecialchars($title, ENT_QUOTES); ?></title>
    <link rel="stylesheet" href="/opdrachten/Code-Gorilla-Syllabus/bootstrap.min.css">
</head>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Homepage</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/opdrachten/Code-Gorilla-Syllabus/pages/blok1/index.php">Blok 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/opdrachten/Code-Gorilla-Syllabus/pages/blok2/index.php">Blok 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/opdrachten/Code-Gorilla-Syllabus/pages/blok3/index.php">Blok 3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/opdrachten/Code-Gorilla-Syllabus/pages/blok4/index.php">Blok 4</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/opdrachten/Code-Gorilla-Syllabus/pages/module 3/Public/index.php">Module 3</a>
            </li>
        <?php
        if (isset($_SESSION['authenticated_user'])) {
            ?>
                <li class="navbar-text">
                    You are logged in as:
                    <?php echo $_SESSION['authenticated_user']; ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/opdrachten/Code-Gorilla-Syllabus/logout.php">Log out</a>
                </li>
            <?php
        } else {
            ?>
            <li class="nav-item">
                <a class="nav-link" href="/opdrachten/Code-Gorilla-Syllabus/login.php">Log in</a>
            </li>
            <?php
        }
        ?>
        </ul>
    </nav>