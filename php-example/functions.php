<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

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