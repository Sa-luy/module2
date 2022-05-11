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
    <title>sua sach</title>
</head>

<body>
    <form action="" method="POST">
        <table border="1">
            <th>
                <h3>Chỉnh Sửa sach</h3>
            </th>
            <tr>
                <td>Ma Loai Sach</td>
                <td><input type="text" name="ma_loai_sach" placeholder="nhập tên" require></td>
            </tr>
            <tr>
                <td>Ten Sach</td>
                <td> <input type="text" name="tensach" placeholder="nhập tên" require></td>
            </tr>
            <tr>
                <td> Nha XB</td>
                <td> <input type="text" name="nxb" placeholder="nhập tên" require></td>
            </tr>
            <tr>
                <td> Tac Gia</td>
                <td> <input type="text" name="tacgia" placeholder="nhập tên" require></td>
            </tr>
            <tr>
                <td> Ma Tac Gia</td>
                <td><input type="text" name="matacgia" placeholder="nhập tên" require></td>
            </tr>
            <tr>
                <td>Nam xb</td>
                <td><input type="text" name="nxb" placeholder="nhập tên" require></td>
            </tr>
            <tr>
                <td>Gia</td>
                <td><input type="text" name="gia" placeholder="nhập tên" require></td>
            </tr>
            <tr>
                <td>Anh</td>
                <td><input type="text" name="image" placeholder="nhập tên" require></td>
            </tr>
            <tr>
                <input type="submit" value="Sửa">
            </tr>
        </table>
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $conn = new PDO('mysql:host=localhost;dbname=bt_dtbase', $username, $password);
        $id = $_REQUEST['id'];
        $name = $_REQUEST['tensach'];
        $ma_loai_sach = $_REQUEST['ma_loai_sach'];
        $nxb = $_REQUEST['nxb'];
        $tacgia = $_REQUEST['tacgia'];
        $matacgia = $_REQUEST['matacgia'];
        $namxb = $_REQUEST['nxb'];
        $gia = $_REQUEST['gia'];
        $image = $_REQUEST['image'];
        $sql = "UPDATE books SET ma_loai_sach='$ma_loai_sach',book_name='$name',nha_xuat_ban='$nxb',
         tac_gia='$tacgia',ma_tac_gia='$matacgia,nam_xuat_ban=$namxb,gia='$gia',image='$image'
        WHERE book_id = $id";
        echo "$id,$name, $ma_loai_sach,  $nxb , $tacgia,  $matacgia, $namxb,  $image ";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // $stmt->setFetchMode(PDO::FETCH_OBJ);
        // $rows = $stmt->fetchAll();
        echo 'Chỉnh Sửa Thành công';
        // header('location: bookManager.php');
    }
    ?>

</body>

</html>