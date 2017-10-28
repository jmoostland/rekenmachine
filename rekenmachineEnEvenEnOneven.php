<!--in de URL werken met _GET en meerderen toevoegen met een &
drie variabelen: getal1, getal2 en een operator (o.a. +.-,*,/ en mogelijk uitbreiden met:%,**)
switch gebruiken-->

<?php
echo "Rekenmachine";
echo"<br>";


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
//Dezelfde volgorde wordt aangehouden bij de if else (dus eerst false en oneven, etc)

function exponent($getal1, $getal2) {
    echo"$getal1 ** $getal2 = " . ($getal1 ** $getal2);
    echo"<br>";
}

switch ($operator) {
    default:
        echo"Je mag een keuze maken uit: optellen, aftrekken, vermenigvuldigen, delen, modulo en exponent.";
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

