<?php
session_start();
function resVal(){
    
    $con = mysqli_connect('localhost', 'root');

    mysqli_select_db($con, 'userregistration2');

    $email=$_SESSION['email'];
    $pass=$_SESSION['password'];

    $s = "select * from usertable2 where email='$email' && password = '$pass'";

    $result = mysqli_query($con , $s);
if($_SESSION['wins'] == 1){//true
    echo "email already exist";
    $result = $_SESSION['wins']+1;
    $reg="insert into usertable2(wins) values('$result')";
    mysqli_query($con,$reg);
    
}
    $result = $_SESSION['games']+1;
    $reg="insert into usertable2(games) values('$result')";
    mysqli_query($con,$reg);

}
?>
