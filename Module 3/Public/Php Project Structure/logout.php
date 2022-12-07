<?php
$title = "How did you get here?";

include("/../../bootstrap.php");

unset($_SESSION['authenticated_user']);

header('Location: login.php');
exit;

?>
