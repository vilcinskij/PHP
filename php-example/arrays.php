<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAYS</title>
</head>

<body>

    <?php
    $arr = [0, 1, 5, 0, 9];
    echo $arr[3];

    $arr2 = ["age" => 0, "key" => 10, "name" => "Oleg"];
    $arr2["name"] = "Petras";
    echo $arr2["name"];

    $arr3 = [
        ["name" => "Student1", "age" => 10, "validation" => true],
        ["name" => "Student2", "age" => 22, "validation" => false],
        ["name" => "Student3", "age" => 35, "validation" => true],
        [4, 5, 6]
    ];
    echo $arr3[2]["name"]
    ?>



</body>

</html>