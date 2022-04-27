<<<<<<< HEAD
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $so_dt = $_POST["so_dt"];
    $mang_sdt = explode(',', $so_dt);
    $mang_vina  = [];
    $mang_vt    = [];
    $mang_mobi  = [];
    for ($i = 0; $i < count($mang_sdt); $i++) {

        $ba_chu_so_dau = substr($mang_sdt[$i], 0, 3);

        if ($ba_chu_so_dau == "091" || $ba_chu_so_dau == "094" || $ba_chu_so_dau == "099") {
            $mang_vina[] = $mang_sdt[$i];
        } elseif ($ba_chu_so_dau == "090" || $ba_chu_so_dau == "093" || $ba_chu_so_dau == "095") {
            $mang_mobi[] = $mang_sdt[$i];
        } else {
            $mang_vt[] = $mang_sdt[$i];
        }
    }
    foreach ($mang_vina as $vina);
    echo 'Vina: ' . $vina;
    echo "<br>";
    foreach ($mang_vt as $vt);
    echo 'Viettel: ' . $vt;
    echo "<br>";

    foreach ($mang_mobi as $mobi);
    echo 'Mobi: ' . $mobi;
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
    <form action="" method="POST">
        <div class="form-group">
            <label for="">Danh sách SĐT</label>
            <textarea class="form-control" name="so_dt" id="" rows="3"><?php echo $so_dt; ?></textarea>
        </div>
        <input type="submit" name="" id="" value="Phân loại">
    </form>
</body>

=======
<?php 
session_start();
// session_destroy();
if(isset($_SESSION['left'])){
    $arr = $_SESSION['arr'];
    $left = $_SESSION['left'];
    $right = $_SESSION['right'];
    $mid = $_SESSION['mid'];

    $_SESSION['arr'] = $arr;
    $_SESSION['left'] = $left;
    $_SESSION['right'] = $right;
    $_SESSION['mid'] = $mid;

    $show = true;
}else{
    $arr = [];
    for($i = 0; $i < 100; $i++){
        $arr[$i] = $i + 1;
    }
    $left = 0;
    $right = count($arr) - 1;
    $mid = ceil(($left + $right)/2);
    $_SESSION['arr'] = $arr;
    $_SESSION['left'] = $left;
    $_SESSION['right'] = $right;
    $_SESSION['mid'] = $mid;
    $show = false;

}

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $rand = rand(1, 100);
    if(isset($_REQUEST['doan'])){
        // var_dump($_SESSION['arr']);
        // echo '[Máy] đoán số: '.$_SESSION['arr'][$_SESSION['mid']];
        echo '[Máy] đoán số: ' . $rand;
    }
    if(isset($_REQUEST['lon_hon'])){
        // echo '<pre>';
        // print_r($_SESSION);
        // echo '</pre>';
        $left = $_SESSION['left'];
        $right = $_SESSION['mid'] -1;
        $mid = ceil(($left + $right)/2 );
        $_SESSION['left'] = $left;
        $_SESSION['right'] = $right;
        $_SESSION['mid'] = $mid;
        echo '[Máy] đoán số: '.$arr[$mid];
    }

    if(isset($_REQUEST['nho_hon'])){
        // echo '<pre>';
        // print_r($_SESSION);
        // echo '</pre>';
        $left = $_SESSION['mid'] + 1;
        $right = $_SESSION['right'];
        $mid = ceil(($left + $right)/2 );
        $_SESSION['left'] = $left;
        $_SESSION['right'] = $right;
        $_SESSION['mid'] = $mid;
        echo '[Máy] đoán số: '.$arr[$mid];
    }

    if(isset($_REQUEST['doan_dung'])){
        echo 'Chúc mừng !!!';
        $show = false;
        session_destroy(); 
    }
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
    <form method="POST">
        hãy nghỉ một số 1=>100
        <?php if($show):?>
        <input type="submit" value="Đoán đúnng" name="doan_dung">
        <input type="submit" value="Đoán lớn hơn rồi" name="lon_hon">
        <input type="submit" value="Đoán nhỏ hơn rồi" name="nho_hon">
        <?php else:?>
        <input type="submit" value="Đoán" name="doan">
        <?php endif;?>
    </form>
</body>
>>>>>>> b6a73c35e935ae9fdc29ee7547ed480b20abd7f6
</html>