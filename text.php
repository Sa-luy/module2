<?php
//function insertSort($arr)
// {
//     for ($i = 1; $i < count($arr); $i++) {
//         $value = $arr[$i];
//         $j = $i;
//         while ($j > 0 && $value < $arr[$j - 1]) {
//             $arr[$j] = $arr[$j - 1];
//             if ($arr[$j] <= $arr[$j - 1]) {
//                 throw new Exception("phát hiện lỗi", 1);
//             }
//             $j--;
//         }
//         $arr[$j] = $value;
//     }
//     return $arr;
// }
// $arr = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
// try {
//     $newArr = insertSort($arr);
//     echo "thêm thành công";
//     print_r($newArr);
// } catch (Exception $e) {
//     echo $e->getMessage();
// } finally {
//     echo "jf6eitygiy";
// print_r($newArr);
//}
// class Exception1 extends  Exception
// {
//     function  cudtomerGetMessage()
//     {
//         return 'Lỗi :' . $this->getMessage() . ' ở file ' . $this->getFile() . 'dong' . $this->getLine();
//     }
// }

// function checkNumber($a, $b)
// {
//     if ($b == 0) {
//         echo "chia 0 khoong hợp lệ";
//     }
//     if ($a == 0) {
//         throw new Exception1('a', 1);
//     } else {
//         echo "chia thanh cong";
//         return $a / $b;
//     }
// }
// try {
//     echo checkNumber(0, 3);
// } catch (Exception1 $e) {
//     echo $e->cudtomerGetMessage();
// }

foreach (array(
    'saluy@gmail.com',
    'hgjh@dhg.com',
    'localpart.ending.with.dot.@example.com',
    '(comment)localpart@example.com',
    '"this is v@lid!"@example.com',
    '"much.more unusual"@example.com',
    'postbox@com',
    'admin@mailserver1',
    '"()<>[]:,;@\\"\\\\!#$%&\'*+-/=?^_`{}| ~.a"@example.org',
    '" "@example.org',
) as $address) {
    echo "<p>$address is <b>" . (filter_var($address, FILTER_VALIDATE_EMAIL) ? 'is ' : 'not') . " valid</b></p>";
}