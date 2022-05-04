
<?php
$host ="localhost";
$username="root";
$password="";
$dbname=" saluy";


$conn=new mysqli($host,$username,$password,$dbname);
if($conn->connect_error){
    die('Ket noi khong thanhf coong'.$conn->connect_error);
}
echo ' ket noi thanh coong';