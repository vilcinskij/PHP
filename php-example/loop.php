<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

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
    echo count($arrObj);
    ?>
</body>

</html>