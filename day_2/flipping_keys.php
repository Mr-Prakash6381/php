<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widt h, initial-scale=1.0">
    <title>Fliping Keys and Values in Array </title>
</head>

<body>
    <h1>Fliping Keys and Values in Array</h1>
    <?php
    $names["Ram"]="Kumar";
    $names["Ravi"]="Prasad";
    $names["Prabu"]="Meka";
    echo "<pre>";
    print_r($names);
    $convert=array_flip($names);
    print_r($convert);
    ?>
</body>

</html>