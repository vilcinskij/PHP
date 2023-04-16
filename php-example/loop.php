<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Document</title>
</head>
<?php
include_once "./blocks/header.php"
?>

<body>
    <?php
    $arr = [4, 5, 9, "i", "labas", 5, 8];
    for ($i = 0; $i < count($arr); $i++) {
        // echo $arr[$i] . "<br>";
    };
    $i = 0;
    while ($i < count($arr)) {
        // echo $arr[$i] . "<br>";
        $i++;
    }
    $arrObj = ["name" => "John", "surname" => "Doe", "age" => 55, "price" => 4900, "validation" => true];
    foreach ($arrObj as $key => $value) {
        echo "$key: $value<br>";
    }
    foreach ($arr as $element) echo "$element<br>";


    ?>
</body>

</html>