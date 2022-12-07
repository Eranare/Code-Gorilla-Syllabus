<!DOCTYPE html>

<?php
session_start();
$users = ["Era" => "$2y$10\$t6DZxSqjNCn0b/grow2L0uU.nb.V0ClCpIlyd.LHMMPqTo.nkE09W"];


if (isset($_POST['username'], $_POST['password'])) {
    // The user has submitted the login form

    if (isset($users[$_POST['username']])) {
        // The provided username is correct, now validate the password
        $expectedPasswordHash = $users[$_POST['username']];

        if (password_verify($_POST['password'], $expectedPasswordHash)) { // The provided password is also correct
            // Redirect to /secret.php
            $_SESSION['authenticated_user'] = $_POST['username'];
            header('Location: ../secret2.php');
        exit; }
           
        }
    
}


?>

<body>
<form method="post">
    <div>
        <label for="username">
            Username:
        </label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">
            Password:
        </label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
</body>
</html>

<!-- PASSWORD-->
<!--cat-->
<!-- hashed -->
<!-- $2y$10$t6DZxSqjNCn0b/grow2L0uU.nb.V0ClCpIlyd.LHMMPqTo.nkE09W -->