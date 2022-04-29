<?php
// $email = "Saluyb Nguyễn Ngọc";
// $parttern = "/^[a-z0-9]+\@[a-z]+\.[a-z]+/";
// if (preg_match($parttern, $email)) {
//     echo "Khop";
// } else {
//     echo "khong khop";
// }
// $parttern = "/\s/";
// $fullname = "Saluy Nguyễn Ngọc";
// echo "<pre>";
// print_r(preg_split($parttern, $fullname));

$str = "Em chua18 abc 29 abc 20";
print_r(preg_replace("/[0-9]+/", "Saluy", $str));