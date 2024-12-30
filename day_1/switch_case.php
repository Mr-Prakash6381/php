<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch In PHP</title>
</head>

<body>
    <h1>Switch Case</h1>
    <?php
    $ch=1;
    switch($ch)
    {
        case 1:
            echo "One";
            break;
        case 2:
             echo "Two";
               break;
         case 3:
            echo "Three";
            break;
        default:
            echo "Enter values between 1-3 tryagin";
    }
    ?>

</body>

</html>