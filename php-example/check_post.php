<?php
$_POST["password"] = md5($_POST["password"]);
foreach ($_POST as $key => $value) {
    echo $value . "<br>";
};

header('Location: loop.php');
exit;
