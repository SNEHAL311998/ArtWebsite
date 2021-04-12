<?php
session_start();
header('location:signinsignup.php');
$con=mysqli_connect('localhost','root','qawedrtgy1357');
mysqli_select_db($con,`userdata`);
$name=$_POST['user'];
$pass=$_POST['password'];

$s=" select * from userinfo where name= '$name'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);
if($num==1){
    echo"Username already taken";
}else{
    $reg="insert into `userinfo`(`name`,`password`) values('$name','$pass')";
    mysqli_query($con,$reg);
    echo"Registration Successful";
}
?>