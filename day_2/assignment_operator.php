<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment operator</title>
</head>
<body>
    <h1>Assignment Operator</h1>
    <?php
    $a=12;
    echo "The Value of A : $a";
    $a+=2;
    echo "<br>The Value of A : $a";
    $a-=5;//a=a-5
    echo "<br>The Value of A : $a";
    $a*=5;
    echo "<br>The Value of A : $a";
    $a/=5;
    echo "<br>The Value of A : $a";
    $a%=2;
    echo "<br>The Value of A : $a";
    $a="surya";
    $b="prakash";
    echo "<br>$a . $b";
    $a.=$b;
    echo "<br> $a";
    ?>
</body>
</html>