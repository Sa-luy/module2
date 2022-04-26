<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_REQUEST['number'];
    echo $number;
}
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
    <form action="" method="POST"></form>
    <input type="number" value="" name="number">
    <input type="submit">

</body>

</html>