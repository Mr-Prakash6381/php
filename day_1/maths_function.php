<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maths Function </title>
</head>
<body>
    <h1>Maths Function</h1>;
    <?php
    echo "Power : " .pow(2,2);
    echo "<br> Squar Root : ", sqrt(1.2);
    echo "<br> Floor : ", floor(2.563);
    echo "<br> Round : ", round(12.234);
    echo "<br> Round with 2 Decimal : ", round(123.416,2);
    echo "<br> Maximum : ", max(10,20,30,40,50,60,70);
    echo "<br> Minimum : ", min(10,20,30,40,50,60,70);
    echo "<br> Random : ", rand(0,100);
    echo "<br> Decimal to Binary : ", decbin(12);
    echo "<br> Binary to Decimal : ", bindec(1100);
    echo "<br> Decimal to Hexadecimal :",dechex(25);
    echo "<br> Decimal to Octal :",decoct(10);

    ?>
</body>
</html>