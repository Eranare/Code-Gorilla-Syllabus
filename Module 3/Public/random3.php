<!DOCTYPE html>
<?php $randomInt = random_int(1, 69); ?>
<html lang="en">
    <head>
        <title>Your lucky number</title>
        <link rel="shortcut icon" href="favicon.ico">
    </head>
<body>
<button onclick="history.back()">Go Back</button><br>
    if random number is above 5, text appears<br>
    <h1>Your lucky number is: <?php echo $randomInt; ?></h1>
    <?php if ($randomInt > 5) { ?>
    <h2>Nice!</h2>
    <?php } ?>
<form method= "post" action= "pictures2RNG.php">
        <input type ="hidden" name = "number" value ="<?php
        echo $randomInt;
        ?>">
    <p>
    <button type= "submit">
        Now show me <?php echo $randomInt; ?> Kittens!
    </button>
</form>

</body>
</html>