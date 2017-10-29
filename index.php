<!--in de URL werken met _GET en meerderen toevoegen met een &
drie variabelen: getal1, getal2 en een operator (o.a. +.-,*,/ en mogelijk uitbreiden met:%,**)
switch gebruiken-->
<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
    </head>
    <body>
        <div style="color:#330099">
            <h1>Rekenmachine</h1>
        </div>
        <div style="color:#990099">
            <p>Vul hier de getallen in:</p>
        </div>
        <form index="index.php">
            Eerste getal: <input type="text" name="getal1">
            <br>
            <br>
            <select name="operator">
                <option name="optellen">+
                <option name="aftrekken">-
            <option name="vermenigvuldigen">*
        <option name="delen">/
</select>
<br>
<br>
Tweede getal: <input type="text" name="getal2">
<br>
<input type="submit" value="uitkomst">
</form>
</body>
</html>

<?php
$getal1 = $_POST ['getal1'];
$getal2 = $_POST ['getal2'];
$operator = $_POST['operator'];

function optellen($getal1, $getal2) {
    echo "$getal1 + $getal2 = " . ($getal1 + $getal2);
    echo"<br>";
}

function aftrekken($getal1, $getal2) {
    echo "$getal1 - $getal2 = " . ($getal1 - $getal2);
    echo"<br>";
}

function vermenigvuldigen($getal1, $getal2) {
    echo"$getal1 x $getal2 = " . ($getal1 * $getal2);
    echo"<br>";
}

function delen($getal1, $getal2) {
    echo "$getal1 : $getal2 = " . ($getal1 / $getal2);
    echo"<br>";
}

function modulo($getal1, $getal2) {
    echo"$getal1 % $getal2 = " . ($getal1 % $getal2);
    echo"<br>";
}

function even_getal($getal1, $getal2) {
    return ($getal1 + $getal2 % 2) ? false : true;
}

//Dezelfde volgorde wordt aangehouden bij de if else (dus eerst false en oneven, etc)

function exponent($getal1, $getal2) {
    echo"$getal1 ** $getal2 = " . ($getal1 ** $getal2);
    echo"<br>";
}

switch ($operator) {
    default:
        echo"<b><dl><dt>" .
        "Je mag een keuze maken uit:<dt><dd> optellen</dd><dd> aftrekken</dd> <dd>vermenigvuldigen</dd><dd> delen</dd><dd>modulo</dd><dd>exponent.</dd></br>";
        break;
    case "optellen":
        echo optellen($getal1, $getal2);
        if (even_getal($getal1, $getal2)) {
            echo "<br> Het getal is oneven";
        } else {
            echo "<br> Het getal is even";
        }
        break;
    case"aftrekken":
        echo aftrekken($getal1, $getal2);
        if (even_getal($getal1, $getal2)) {
            echo "<br> Het getal is oneven";
        } else {
            echo "<br> Het getal is even";
        }
        break;
    case"vermenigvuldigen":
        echo vermenigvuldigen($getal1, $getal2);
        if (even_getal($getal1, $getal2)) {
            echo "<br> Het getal is oneven";
        } else {
            echo "<br> Het getal is even";
        }
        break;
    case"delen":
        echo delen($getal1, $getal2);
        if (even_getal($getal1, $getal2)) {
            echo "<br> Het getal is oneven";
        } else {
            echo "<br> Het getal is even";
        }
        break;
    case"modulo":
        echo modulo($getal1, $getal2);
        if (even_getal($getal1, $getal2)) {
            echo "<br> Het getal is oneven";
        } else {
            echo "<br> Het getal is even";
        }
        break;
    case"exponent":
        echo exponent($getal1, $getal2);
        if (even_getal($getal1, $getal2)) {
            echo "<br> Het getal is oneven";
        } else {
            echo "<br> Het getal is even";
        }
        break;
}
?>

<!DOCTYPE html>
<html>
    <body>
        <br>
        <a href="https://github.com/jmoostland">Voor meer informatie</a>
        <br>
        <!--        Waarom wordt de link paars?-->
        <br>
        <button type="button" onclick="alert('Om <button> te testen')">Klik hier!</button>
    </body>
</html>
