<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>switch</title>
</head>
<?php
include_once "./blocks/header.php"
?>

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