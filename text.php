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

</html>