<?php




$obj = new SplStack();
$str = 's * (s - a) * {s - b} * (s - c)  ';
for ($i = 1; $i < strlen($str); $i++) {

    if ($str[$i] == '(' || $str[$i] == '[' || $str[$i] == '{') {
        $obj->push($str[$i]);
        echo '<pre>';
        print_r($obj);
    } // else {
    //     if (!$obj->isEmpty()) {
    //         if ($str[$i] == ')') {
    //             if ($obj->current() != '(') {
    //                 return false;
    //             }
    //         }
    //     }
    //     if ($str[$i] == '}') {
    //         if ($obj->current() != '{') {
    //             return false;
    //         }
    //     }
    //     if ($str[$i] == ']') {
    //         if ($obj->current() != '[') {
    //             return false;
    //         }
    //     }
    //  echo '<pre>';
    // print_r($obj); // kierm tra xong thì xóa phần tử đầu tiên của stack đi
    //}
}

echo '<pre>';
echo ($obj->current());
print_r($obj);