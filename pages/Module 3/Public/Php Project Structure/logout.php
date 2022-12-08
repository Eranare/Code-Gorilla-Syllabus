<?php
$title = "How did you get here?";

include("/../../bootstrap.php");

unset($_SESSION['authenticated_user']);

header('Location: /opdrachten/Code-Gorilla-Syllabus/pages/Module 3/Public/Php Project Structure/login.php');
exit;

?>
