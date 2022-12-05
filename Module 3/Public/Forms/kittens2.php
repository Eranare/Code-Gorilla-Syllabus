<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kittens</title>
</head>
<body>
<button onclick="history.back()">Go Back</button><br>
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
    <img src="img/cat.png" width=175px width =175px alt="Cat <?php echo $i; ?>">
    <?php
}

?>
<!--Code below has protection build in to only take the numbers from the given input form-->
<form>
        <div>
            <label for="number">
                Number of kittens to show:
            </label>
            <input name="number" id="number"
            value="<?php if (isset($_GET['number'])) { echo htmlspecialchars($_GET['number'], ENT_QUOTES);}?>">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    <!-- The code below has no protection in the input field, possible to echo an alert on screen, or worse.
    <form>
        <div>
            <label for="number">
                Number of kittens to show:
            </label>
            <input name="number" id="number"
                value="<?php
               // if (isset($_GET['number'])) { echo $_GET['number']; }
                ?>">    
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form> -->
</body>
</html>