<!DOCTYPE html>
<?php $randomInt = random_int(1, 69); ?>
<html lang="en">
    <head>
        <title>Your lucky number</title>
        <link rel="shortcut icon" href="favicon.ico">
    </head>
<body>
<button onclick="history.back()">Go Back</button><br>
<h2>Name: <?php
echo htmlspecialchars($_COOKIE['name'] ?? 'Anonymous user', ENT_QUOTES); // no char limit up here
?>!</h2> <br>
    if random number is above 5, text appears<br>
    <h1>Your lucky number is: <?php echo $randomInt; ?></h1>
    <?php if ($randomInt > 5) { ?>
    <h2>Nice! <?php
    $name = $_COOKIE['name'] ?? "Anonymous"; // name cookie has 25 character limit now
    if (isset($name)) {
        if (strlen($name) > 25) {
        $name = substr($name, 0, 25);
    }
    echo  htmlspecialchars($name, ENT_QUOTES);
    }
    ?></h2>
    <?php } ?>
<form method= "post" action= "picturesRNG.php">
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