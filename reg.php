<?php
session_start();
header('location:signin.php');//if succes

$con = mysqli_connect('localhost','root');//sentax
mysqli_select_db($con,'userregistration2');//sentax

$email=$_POST['email'];//from user 
$pass=$_POST['password'];
$name=$_POST['username'];
$_SESSION['email']=$email;//make sure if its in database

$s= "select * from usertable2 where email='$email'";//check
$result = mysqli_query($con , $s);//validation email -- true or false "1,0"

$num = mysqli_num_rows($result);//true or false again

if($num == 1){//true
    echo "email already exist";
}else{
        $reg="insert into usertable2(email,username,password) values('$email','$name','$pass')";
        mysqli_query($con,$reg);
        echo"registraiton successful";
    }

?>