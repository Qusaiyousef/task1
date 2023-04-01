<?php
include "init.php";


$_SESSION['name']=$_POST['con_name'];
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['commit']=$_POST['commit'];


if(isset($_POST['con_name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['commit']))
{
$con_name= $_POST['con_name'];
$email=$_POST['email'];
$phone= $_POST['phone'];
$commit=$_POST['commit'];
$sql="insert into contact (con_name , con_email , con_phone , comment ) values ( '$con_name' , '$email' , '$phone' , '$commit') ";
mysqli_query($conn , $sql);
echo " تم  الارسال ";
}
else
echo " هناك خطاء";
mysqli_close($conn);
?>