<?php
include_once "connect.php";
include_once "test.class.php";
?>
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
    $obj = new Test();
    $obj->getUsers();
    echo "123";
    ?>
</body>

</html>