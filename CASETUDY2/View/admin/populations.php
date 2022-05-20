<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Population</title>
</head> -->
<?php include './Layout/header.php' ?>

<body>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Recent Salse</h6>
                <a href="http://localhost/module2/CASETUDY2/index.php?controller=population&action=index">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">STT</th>
                            <th scope="col">Họ</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Ngày Sinh</th>
                            <!-- <th scope="col">Số Hộ Khẩu</th> -->
                            <th scope="col">giới Tính</th>
                            <!-- <th scope="col">Số CCCD</th> -->
                            <!-- <th scope="col">Mã chủ hộ</th> -->
                            <!-- <th scope="col">Địa chỉ</th> -->
                            <th scope="col">Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($obj as $row) : ?>

                        <tr>
                            <td><?= $row->id ?></td>
                            <td><?= $row->fistname ?></td>
                            <td><?= $row->lastname ?></td>
                            <td><?= $row->day_of_birth ?></td>
                            <td><?= $row->gender ?></td>
                            <!-- <td><?= $row->cccd ?></td> -->
                            <!-- <td><?= $row->id_roof ?></td> -->
                            <!-- <td><?= $row->address ?></td> -->
                            <td> <a class="btn btn-sm btn-primary"
                                    href="index.php?controller=population&action=show&id=<?= $row->id ?>">Chi tiet</a>
                                <a class="btn btn-sm btn-primary"
                                    href="index.php?controller=population&action=delete&id=<?= $row->id ?>">Xoa</a>
                                <a class="btn btn-sm btn-primary"
                                    href="index.php?controller=population&action=edit&id=<?= $row->id ?>">Sửa</a>
                            </td>

                            <!-- <td><a class="btn btn-sm btn-primary" href="">Detail</a></td> -->
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div>
        <a href="index.php?controller=population&action=add">Thêm Mới</a>
    </div>
    <!-- form  tim kiem -->
    <!-- thẻ form -->
    <a href=" index.php?controller=population&action=search">Tìm Kiếm</a>
    <!-- Hiển thị dât báse -->
    <!-- <div>
        <fieldset>
            <table border="1">
                <tr>
                    <th>STT</th>
                    <th>Họ</th>
                    <th>Tên</th>
                    <th>Ngày Sinh</th>
                    <!-- <th>Số Hộ Khẩu</th> -->
    <!-- <th>giới Tính</th> -->
    <!-- <th>Số CCCD</th> -->
    <!-- <th>Mã chủ hộ</th> -->
    <!-- <th>Địa chỉ</th> -->
    <!-- <th>Chức Năng</th> -->
    <!-- </tr> -->
    <!-- <?php foreach ($obj as $row) : ?> -->
    <!-- <tr> -->
    <!-- <td><?= $row->id ?></td>
    <td><?= $row->fistname ?></td>
    <td><?= $row->lastname ?></td>
    <td><?= $row->day_of_birth ?></td>
    <td><?= $row->gender ?></td> -->
    <!-- <td><?= $row->cccd ?></td> -->
    <!-- <td><?= $row->id_roof ?></td> -->
    <!-- <td><?= $row->address ?></td> -->
    <!-- <td> <a href="index.php?controller=population&action=show&id=<?= $row->id ?>">Chi tiet</a>
        <a href="index.php?controller=population&action=delete&id=<?= $row->id ?>">Xoa</a>
        <a href="index.php?controller=population&action=edit&id=<?= $row->id ?>">Sửa</a>
    </td> -->

    <!-- </tr> -->
    <!-- <?php endforeach; ?> -->
    <!-- </table> -->
    <!-- </div> -->
    <!-- </fieldset> -->
    <div>
        <a href="index.php?controller=population&action=index">Quay Lai</a>
    </div>
</body>
<?php include './Layout/footer.php' ?>

</html>