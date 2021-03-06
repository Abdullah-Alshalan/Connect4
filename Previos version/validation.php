<?php
session_start();



$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'userregistration2');

$email=$_POST['email'];
$pass=$_POST['password'];


$s = "select * from usertable2 where email='$email' && password = '$pass'";

$result = mysqli_query($con , $s);

$num = mysqli_num_rows( $result );

if($num == 1){
    $user =$result -> fetch_assoc();
    $_SESSION['username']=$user['username'];
    $_SESSION['email']=$user['email'];
    $_SESSION['password']=$user['password'];
    $_SESSION['games']=$user['games'];
    $_SESSION['wins']=$user['wins'];
header('location:homepageAFT.php');
    
}else{
        header('location:signin.php');
    }

?>