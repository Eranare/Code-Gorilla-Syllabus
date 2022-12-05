<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kittens</title>
</head>
<body>
<button onclick="history.back()">Go Back</button><br>
<?php

//$numberOfKittens = $_GET['number'];

$numberOfPictures = isset($_POST['number']) ? (int)$_POST['number'] : 1;
if ($numberOfPictures < 1) {
    $numberOfPictures = 1;
}

$picture = isset($_POST['picture']) ? $_POST['picture'] : 'cat.png';

for ($i = 1; $i <= $numberOfPictures; $i++) {
    ?>
    Picture <?php echo $i; ?>:
    <img src= <?php print htmlspecialchars($picture, ENT_QUOTES); ?>
        width=175px height=87.5px alt= Picture <?php print $i; ?> >
    <?php
}

?>
<!--Code below has protection build in to only take the numbers from the given input form-->
<form method="post">
        <div>
            <label for="picture">
                Select a picture:
            </label>
      <?php
            $pictures = [
    'cat.png' => 'Cat',
    'niohcat.png' => 'Nioh2 Cat'
];
?>
<select name="picture" id="picture">
<?php foreach ($pictures as $filename => $description) {
    ?>
    <option value="<?php
        echo htmlspecialchars($filename, ENT_QUOTES);
        ?>"<?php
        if (isset($_POST['picture']) && $_POST['picture'] === $filename) {
            ?> selected<?php
        }
        ?>>
        <?php echo htmlspecialchars($description, ENT_QUOTES); ?>
    </option>
    <?php
} ?>
</select>
        </div>
        <div>
            <label for="number">
                Number of pictures to show:
            </label>
            <input name="number" value="<?php
                if (isset($_POST['number'])) {
                print htmlspecialchars($_POST['number'], ENT_QUOTES); }
                ?>">    
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>