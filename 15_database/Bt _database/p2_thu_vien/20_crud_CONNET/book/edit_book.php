<?php
$username = 'root';
$password = '';
$conn = new PDO('mysql:host=localhost;dbname=bt_dtbase', $username, $password);
$id = $_REQUEST['id'];
// echo $id;

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
    <form action="" method="POST">
        <h3>Chỉnh Sửa Sach</h3>
        Tên Sach
        <input type="text" name="name" placeholder="nhập tên" require>
        <input type="submit" value="Sửa">
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $conn = new PDO('mysql:host=localhost;dbname=bt_dtbase', $username, $password);
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $sql = "UPDATE books SET book_name = '$name' WHERE book_id = $id";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // $stmt->setFetchMode(PDO::FETCH_OBJ);
        // $rows = $stmt->fetchAll();
        // echo 'Chỉnh Sửa Thành công';
        header('location: bookManager.php');
    }
    ?>

</body>

</html>