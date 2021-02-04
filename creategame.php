<!DOCTYPE html>
<html>
<style>
*{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;

}
/* h1{	padding: 8px 20px;
	margin: 10px 0;
    } */


input[type=text] {
  width: 55%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left: auto;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  text-align: left;
  box-sizing: border-box;
  /* background-color:red; */
}

input[type=submit] {
  width: 50%;
  background-color: #0082e6;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  margin-left: auto;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=radio]:after {
    width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 0.75px solid white;
}
input[type=radio]:checked:after {
    width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: yellow;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 0.25px solid white;
}

div {
  border-radius: 5px;
  padding: 20px;
}

*{
    padding: 0;
    margin: 2;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;

}
body{
    font-family: montserrat;

}
nav{
    background: #0082e6;
    height: 80px;
    width: 100%;
}
label.logo{
    color: white;
    font-size: 35px;
    line-height: 80px;
    padding: 100px;
    font-weight: bold;
}
nav ul{
    float: right;
    margin-right: 20px;

}
img{
    position:absolute;
}
nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 5px;
}
nav ul li a{
    color: white;
    font-size:  24px;
    border-radius: 3px;
    text-transform: uppercase;
}
a.active ,a:hover{
background: #1b9bff;
transition: .5s;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
  max-width: 500px;
  height: auto;
  margin: 8% 30%;
  text-align: center;
  font-family: arial;
  background-color:#c62828;
  border-radius:25px;
  padding:20px;
  width:40%;
  color:white;
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateGame</title>
</head>
<html>
<head>

</head>
<body>
<nav>

<img class = "logo" src="logo.png" width ="18%" height="8.5%" opacity="1"> 
  <ul>
    <li><a class ="#"><a class="btn btn-outline-primary" href="homepageAFT.php">home</a></li>
    <li><a href = "#"><a class="active" href="#">create game</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="account.php">account</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="signout.php">signout</a></li>
  </ul>
</nav>
</style>
<body style="background-image: url('back.jpg');background-repeat:no-repeat;
background-size:100% 91.5%;background-attachment:fixed;background-position:bottom;">
<!-- <img src ="back.jpg" position="absolute" width ="100%" height="90%"> -->
<!-- <div style="background-image: url('back.jpg');"> -->
<?php
session_start();
if(isset($_GET['error'])) {
  echo($_GET['error']);
}
$user=$_SESSION['username'];
?>

  <div class = 'card'>
  <form action="gameAFT.php" method="post"><!--Action-->
  <!-- <input type ="text"  placeholder="player1" name ="player1" id="player1" required> -->
  <h1 >Game customisation</h1>
  <br>
  <!-- <h2><small>Guest Nickname</small></h2> -->
  <input type ="text" placeholder="Guest Nickname" name ="player2" id="player2" required>
  <br>
  <br>
  <h2>Who begins</h2>
  <br>
  <input type="radio" name="begins" id="b1" value="b1" checked>
  <label for="b1">
    <?php
    echo $user
    ?>
     </label>
  <input type="radio" name="begins" id="b2" value="b2">
  <label for="b2">Guest </label>
  <br>
  <input type="submit" value="Start Game">
  </form>   
  </div>

</body>
</html>