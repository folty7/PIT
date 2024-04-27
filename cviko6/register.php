<?php
    $con = mysqli_connect("127.0.0.1", "pit", "pit", "pit");

    if (@$_POST['_send'] == "Register"){

        $login = htmlspecialchars($_POST['login']);
        $heslo = hash("sha256", $_POST['heslo']);
        $meno = htmlspecialchars($_POST['meno']);

        $sql_check = "SELECT id FROM users WHERE login = '$login'";
        $query = mysqli_query($con, $sql_check);
        $count = mysqli_num_rows($query);
        if($count > 0){
            echo "Uz existuje user s mailom $login";
        } else{
            $sql = "INSERT INTO users (login, heslo, meno) VALUES ('$login', '$heslo', '$meno')";
            mysqli_query($con, $sql);
        }
    }

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p>E-mail</p>
    <input type="email" name="login" required/>
    <p>Heslo</p>
    <input type="password" name="heslo" required/>
    <p>Meno</p>
    <input type="text" name="meno" required/>
    <input type="submit" name="_send" value="Register"/>
</form>
