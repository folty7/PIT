<?php
if (@$_REQUEST['_send'] == "Login") {

    session_start();
    var_dump($_SESSION);
    $login = htmlspecialchars($_POST['login']);
    $heslo = hash('sha256', $_POST['heslo']);

    if ($login === "administrator@ucm.sk"
        && $heslo === "56b2125e65e445c240dc1e0324ed03fb904928905c66980b2a186934b583ed78") {

        echo "Prihlaseny";
        $_SESSION['USERID'] = "administrator@ucm.sk";
        setcookie("token", hash("sha256", $login . $_POST['heslo']), time() + (86400 * 30));
        header("Location: protected.php");
        die();

    }
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p>E-Mail</p>
    <input type="email" name="login"/>
    <p>Heslo</p>
    <input type="password" name="heslo"/>
    <input type="submit" name="_send" value="Login"/>
</form>
<!--
cookie hash = 45db00fb82782f01f802e67ec30392038cec7180fddf7f4ed6929de643f07557
Následne kontrolujte túto hodnotu v stránke protected.php a následne ak neexistuje
session, tak ho vytvorte rovnako ako pri prihlásení t.j. session s kľúčom USERID a v ňom
bude uložený mail administrator@ucm.sk
-->