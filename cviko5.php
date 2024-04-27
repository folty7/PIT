<?php

echo "REQUEST: " . @$_REQUEST['skupina'] . "<br/>";
echo "GET: " . @$_GET['skupina'] . "<br/>";
echo "POST: " . @$_POST['skupina'] . "<br/>";

if (@$_REQUEST['_send'] == "Odoslať") {
    if (@$_REQUEST['skupina'] == "6") {
        echo "Sme skupina 6";
    } else {
        echo "Nie sme skupina 6";
    }
}
?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p>Osobne udaje</p>
        Meno
        <input type="text" name="meno" placeholder="meno"><br/>
        Priezvisko
        <input type="text" name="priezvisko" placeholder="Priezvisko">
        Pohlavie<br/>
        <input type="radio" name="pohlavie" value="muz"/> Muz<br/>
        <input type="radio" name="pohlavie" value="zena"/> Zena<br/>
        <input type="radio" name="pohlavie" value="ine"/> Ine<br/>
        <p>Datum narodenia</p>
        <input type="date" name="narodenie"/>
        <p>Prihlasovacie udaje</p>
        Login
        <input type="text" name="login" placeholder="login" required><br/>
        Heslo
        <input type="password" name="heslo" placeholder="Heslo" required>
        <p>Udaje o studiu</p>
        <p>Rocnik</p>
        <input type="radio" name="rocnik" value="prvy"/> prvy<br/>
        <input type="radio" name="rocnik" value="druhy"/> druhy<br/>
        <input type="radio" name="rocnik" value="treti"/>treti<br/>
        <p>Skupina</p>
        <select name="skupina">
            <option value="6">Skupina 6</option>
            <option value="7">Skupina 7</option>
            <option value="8">Skupina 8</option>
            <option value="9">Skupina 9</option>
        </select>
        <br/>
        <select name="predmety[]" multiple>
            <optgroup label="Matematika">
                <option value="Matematika">Matematika</option>
                <option value="Matematicka Analyza">Matematicka Analyza</option>
            </optgroup>
            <optgroup label="Informatika">
                <option value="Programovanie">Programovanie</option>
                <option value="Internetove Technologie">Internetove Technologie</option>
            </optgroup>
        </select>
        <p>Semestralna Praca</p>
        <input name="praca" type="file"/>
        <br/>
        <input name="vaha" type="range" min="0" max="100" value="0"
               oninput="this.nextElementSibling.value = this.value">
        <output>0</output>
        <br/>
        <input type="submit" name="_send" value="Odoslať">
        <input type="submit" value="Vymaz"/>
    </form>
<?php

if (@$_REQUEST['_send'] == "Odoslať") {
    if ($_REQUEST['meno'] == "" || $_REQUEST['priezvisko'] == "") {
        echo "<h1 style='color: red;'>Nebolo zadane meno alebo priezvisko</h1>";
    }
    if (!filter_var(@$_REQUEST['login'], FILTER_VALIDATE_EMAIL)) {
        echo "<h1 style='color: red;'>Bol zadany zly format emailu</h1>";
    }
}
?>