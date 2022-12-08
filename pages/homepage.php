<?php

include(__DIR__ . '/../bootstrap.php');

$title = 'Homepage';
include(__DIR__ . '/../_header.php');
?>
<h1> my stuff</h1>

<?php if (isset($_SESSION['authenticated_user'])) {
            ?>
                
                
                    <a class="nav-link" href="/opdrachten/Code-Gorilla-Syllabus/logout.php">Stuff here</a>
                
            <?php
        } else {
            ?>
           
                <a class="nav-link" href="/opdrachten/Code-Gorilla-Syllabus/login.php">Log in to see stuff here</a>
        <?php   
        }
        ?>

<?
include(__DIR__ . '/../_footer.php');