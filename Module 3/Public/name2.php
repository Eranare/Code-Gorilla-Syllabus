<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name</title>
</head>
<body>
<button onclick="history.back()">Go Back</button><br>
<?php
if (isset($_POST['name'])) {
    setcookie('name', $_POST['name']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<form method="post">
    <p>
        <label for="name">
            Your name:
        </label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <button type="submit">Submit</button>

    </p>
    <a href ="random4.php">rng with cookie</a>
</form>
</body>
</html>