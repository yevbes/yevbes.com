<?php

/**
 * Created by PhpStorm.
 * User: yevbes
 * Date: 21/01/18
 * Time: 0:54
 */
require "includes/db.php";
$data = $_POST;
if (isset($data['do_login'])) {
    $admin = R::findOne('admin', 'login = ?', array($data['login']));
    if ($admin) {
        if (password_verify($data['pass'], $admin->pass)) {
            $_SESSION['logged_admin'] = $admin;
            header('Location: index.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <p>
    <p>Login:</p>
    <input type="text" name="login" required>
    </p>

    <p>
    <p>Pass:</p>
    <input type="password" name="pass" required>
    </p>

    <p>
        <input type="submit" value="Submit" name="do_login">
    </p>
</form>

</body>
</html>