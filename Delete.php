
<?php
require "connecntion.php";

$connect =$conn;

$name= $_POST['delete'];

$sql2 = "DELETE FROM `tb_` WHERE  Name_ = '$name' ";
//$sql2 = "DELETE FROM `tb_` WHERE  Name_ = '$name' AND Time = '' ";


if (mysqli_query($connect, $sql2)) {
  echo "ลบข้อมูลจากฐานข้อมูลเรียบร้อย";
 } else {
  echo "ข้อผิดพลาดการลบข้อมูล: " . mysqli_error($connect);

 }

 

 echo "<h1><a href ='e-com.php'>กลับหน้าเดิม</a></h1>";
// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($connect);

?>