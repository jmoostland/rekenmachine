
<!--drie variabelen: getal1, getal2 en een operator (o.a. +.-,*,/ en mogelijk uitbreiden met:%,**)-->


<?php

// function to calculate and return result
function calculate($x, $y, $op) {
    // calculate $prod using switch (case) statement
    switch ($op) {
        case '+':
            $prod = $x + $y;
            break;
        case '-':
            $prod = $x - $y;
            break;
        case '*':
            $prod = $x * $y;
            break;
        case '%':
            $prod = $x % $y;
            break;
        case '**':
            $prod = $x ** $y;
            break;
        case '/':
            if ($y == 0) {
                $prod = "&#8734";
            } else {
                $prod = $x / $y;
            }
    }
    // return the result
    return $prod;
}

// declare all variables
$x = 0;
$y = 0;
$prod = 0;
$op = '';
// grab the form values from $_GET hash
extract($_GET);
?>

<html>
    <head>
        <title>Rekenmachine</title>
    </head>

    <body>
        <div style="color:#330099">
            <h1><i>Rekenmachine</i></h1>
        </div>
        <div style="color:#000000">
            <h2>Je mag een keuze maken uit: 
                <table>
                    <tr>
                        <th><li>optellen</li></th>
                    <th><li>aftrekken</li></th>
                    <th><li>vermenigvuldigen</li></th>
                    <th><li>delen</li></th>
                    </tr>
                    <tr>
                        <th><li>modulo</li></th>
                    <th><li>exponent</li></th>
                    </tr>
                </table></h2>
        </div>
        <div style="color:#00000">
            <h3>Vul hier de getallen in:</h3>
        </div>
        <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            Het eerste getal <input type="text" name="x" size="5" value="<?php print $x; ?>"/>
            <br>
            <br>

            <select name="op">
                <option value="+" <?php if ($op == '+') echo 'selected="selected"'; ?>>+</option>
                <option value="-" <?php if ($op == '-') echo 'selected="selected"'; ?>>-</option>
                <option value="*" <?php if ($op == '*') echo 'selected="selected"'; ?>>*</option>
                <option value="/" <?php if ($op == '/') echo 'selected="selected"'; ?>>/</option>
                <option value="%" <?php if ($op == '%') echo 'selected="selected"'; ?>>%</option>
                <option value="**" <?php if ($op == '**') echo 'selected="selected"'; ?>>**</option>
            </select>
            <br>
            <br>
            Het tweede getal  <input type="text" name="y" size="5" value="<?php print $y; ?>"/>
            <br>
            <br>
            <input type="submit" name="calc" value="Bereken"/>
        </form>

        <?php
        if (isset($calc)) {
            // check that $x & $y are numeric

            if (is_numeric($x) && is_numeric($y)) {
                // call the caculate function and pass $x, $y & $op as args.
                $prod = calculate($x, $y, $op);

                // print the result 
                echo "<p>$x $op $y = $prod</p>";
            } else {
                // unaccepatable values
                echo "<br>";
                echo "<p>Er is niet een getal ingevuld.<br>Probeer opnieuw.</p>";
            }
        }
        ?>

    </body>
</html>
