<!--in de URL werken met _GET en meerderen toevoegen met een &
drie variabelen: getal1, getal2 en een operator (o.a. +.-,*,/ en mogelijk uitbreiden met:%,**)
switch gebruiken-->
<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
    </head>
    <body>

        <h1>Rekenmachine</h1>
        <p>Vul hier het eerst getal in:</p>

    </body>
</html>

<?php
$getal1 = $_GET ['getal1'];
$getal2 = $_GET ['getal2'];
$operator = $_GET['operator'];

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

//Dezelfde volgorde wordt aangehouden bij de if els (dus eerst false en oneven, etc)

function exponent($getal1, $getal2) {
    echo"$getal1 ** $getal2 = " . ($getal1 ** $getal2);
    echo"<br>";
}

switch ($operator) {
    default:
        echo"<b>Je mag een keuze maken uit: optellen, aftrekken, vermenigvuldigen, delen, modulo en exponent.</br>";
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
        <br>
<button type="button" onclick="alert('Om <button> te testen')">Click Me!</button>
    </body>
</html>
