Logged out
<?php



unset($_SESSION['authenticated_user']);

header('Location: index.php');
exit;

?>
