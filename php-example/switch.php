<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>

<body>
    <?php

    $x = "0";
    $y = "5";
    $z = "6";

    if ($z >= 0 && $x == 0) {


        switch ($z) {
            case 4;
                echo "LABAS";
                break;
            case 5;
                echo "LABAS_2";
                break;
            case 6;
                echo "LABAS_3";
                break;
        }
    } else
        echo "arba $z mažiaus už 0 arba $x nelygu 0"

    ?>
</body>

</html>