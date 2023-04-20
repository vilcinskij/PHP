<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
include_once "./blocks/header.php"
?>

<body>
    <?php

    $g = 4;

    function sum($a, $b)
    {
        return $a + $b;
    }

    function stati($a)
    {
        static $sta;
        return $sta + $a;
    }

    function glbl($a)
    {
        global $g;
        return $g + $a;
    }

    // echo sum(5, 25);
    echo stati(5) . "<br>";
    echo stati(5) . "<br>";
    echo stati(5) . "<br>";

    echo "Global:" . glbl(100);


    ?>
</body>

</html>