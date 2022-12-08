<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name</title>
</head>
<body>
<button onclick="history.back()">Go Back</button><br>
<?php
session_start();

if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];

    $_SESSION['message'] = 'Thanks for telling us your name!';

    header('Location: random3.php');
    exit;
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
    <a href ="random3.php">Rng with Sessions</a>
</form>
</body>
</html>