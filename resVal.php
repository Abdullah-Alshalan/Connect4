<?php
session_start();

    
$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'userregistration2');

$email=$_SESSION['email'];


$games = $_SESSION['games']+1;

$has_won = $_POST['has_won'] == "true";


if($has_won){//true
    $wins = $_SESSION['wins']+1;
    $_SESSION['wins'] = $wins;
    $reg="Update usertable2 set wins = '$wins' where email = '$email'";
    mysqli_query($con,$reg);
}
$_SESSION['games'] = $games;
$reg="Update usertable2 set games = '$games' where email = '$email'";
mysqli_query($con,$reg);



?>