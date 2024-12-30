<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic operator</title>
</head>
<body>
    <h1>Arithmetic operator</h1>
    <?php
    /*
    + = Addition
    - = Sub
    * = Multiply
    / = Divison
    % = Modulus
    */
    $a=40;
    $b=50;
    $add=$a+$b;
    $sub=$a-$b;
    $Mul=$a*$b;
    $div=$a/$b;
    $mod=$a%$b;

    echo "<br> Add A + B : $add <br> ";
    echo "<br> Sub A - B : $sub <br> ";
    echo "<br> Multiply A * B : $Mul <br> ";
    echo "<br> Divison A / B : $div <br> ";
    echo "<br> Modulus A % B : $mod <br> ";
    ?>
</body>
</html>