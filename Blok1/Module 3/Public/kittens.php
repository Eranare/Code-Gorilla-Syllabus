<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kittens</title>
</head>
<body>
<?php

//$numberOfKittens = $_GET['number'];
if (isset($_GET['number'])) {
    $numberOfKittens = (int) $_GET['number'];
} else {
    $numberOfKittens = 1;
}
if ($numberOfKittens < 1) {
    $numberOfKittens = 1;
}
for ($i = 1; $i <= $numberOfKittens; $i++) {
    ?>
    Cat <?php echo $i; ?>:
    <img src="cat.png" width=175px width =175px alt="Cat <?php echo $i; ?>">
    <?php
}

?>
</body>
</html>