<?php
session_start();

if (isset($_SESSION['USERID'])) {
    echo "Ahoj, ty si: " . $_SESSION['USERID'];
} else {
    if ($_COOKIE['token'] === "45db00fb82782f01f802e67ec30392038cec7180fddf7f4ed6929de643f07557") {
        echo "cookie";
        $_SESSION['USERID'] = "administrator@ucm.sk";
        setcookie("token", "", time() + (-86401 * 30), '/');
        die();
    } else {
        header('Location: login.php');
        die();
    }
}

if (@$_GET['action'] === "logout") {
    session_unset();
    session_destroy();
    setcookie("token", "", time() + (-86401 * 30), '/');
    header('Location: login.php');
    die();
}

if (@$_GET['action'] === "delete") {
    $sql = "DELETE FROM users WHERE id=".$_SESSION['user'];
    echo $sql;
    session_unset();
    session_destroy();
    setcookie("token", "", time() + (-86401 * 30), '/');
    header('Location: login.php');
    die();
}

if(@$_POST['_send'] == "Zmen"){
    $heslo = hash("sha256", $_POST['noveheslo']);
    $sql = "UPDATE users SET heslo = 'heslo' WHERE id=".$_SESSION['user'];
    echo $sql;
}

?>

<a href="protected.php?action=logout">Odhlasenie</a>

<form method="post">
    <input type="password" name="noveheslo" />
    <input type="submit" name="_send" name="Zmen" />
</form>