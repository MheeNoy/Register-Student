<?php
// ตั้งค่าตัวแปรข้อมูลสำหรับติดต่อฐานข้อมูล
require "connecttion.php";

$connect =$conn;
// SQL แทรกชุดข้อมูลลงในตาราง
$name =$_POST['text'];
  //$Date = date("d/m/y<br>"); 
  /*
$sql = "INSERT INTO `Sattawutุ6421512630` (id_,Type_name,Product_name,Date_time,Price,Image,Stock_Number)
 VALUES ('00002','test02','test02','0000-00-00','0000.00','image/test.png','000')";
*/
$sql ="INSERT INTO 'tb_'( TABLE NAME)
VALUE ('$name','$Date')";
// ตรวจสอบการบันทึกลงฐานข้อมูล
if (mysqli_query($connect, $sql)) {
  echo "บันทึกข้อมูลลงฐานข้อมูลเรียบร้อย";
 } else {
  echo "ข้อผิดพลาด: " . $sql . "<br>" . mysqli_error($conn);
 }


// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($connect);
 
?>