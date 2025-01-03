<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Split and Merge Array</title>
</head>

<body>
    <h1>Split and Merge Array</h1>
    <?php
    $name[]="Ram";
    $name[]="Ravi";
    $name[]="Tom";
    $name[]="Sam";
    $name[]="Babu";
    echo "<pre>";
    print_r($name);
    $a2=array_slice($name,3,4);
    print_r($a2);
    $name1[]="Gokul";
    $name1[]="Gowthan";
    print_r($name1);
    $total=array_merge($name,$name1);
    print_r($total);
    ?>

</body>

</html>