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
    <div class="container mt-5">
        <form action="check_post.php" method="post">
            <input type="text" name="name" placeholder="Enter your name" class="form-control"><br>
            <input type="email" name="email" placeholder="Enter your email" class="form-control"><br>
            <input type="password" name="password" placeholder="Enter your password" class="form-control"><br>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Enter your message" class="form-control"></textarea><br>
            <input type="submit" value="Send" class="btn btn-success">
        </form>
    </div>
</body>

</html>
