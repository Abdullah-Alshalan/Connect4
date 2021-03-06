
<html lang="en">
<head>
    <style>
        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;

        }
        body{
            font-family: montserrat;

        }

        img{
    
            position:absolute;
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
          background-color:yellow;
          border-radius:25px;
          padding:20px;
          width:40%;
  
        }

        .title {
          color: grey;
          font-size: 18px;
        }

        button {
          border: none;
          outline: 0;
          display: inline-block;
          padding: 8px;
          color: white;
          background-color: #000;
          text-align: center;
          cursor: pointer;
          width: 100%;
          font-size: 18px;
        }

        a {
          text-decoration: none;
          font-size: 22px;
          color: black;
        }

        button:hover, a:hover {
          background: #1b9bff;
          transition: .5s;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account </title>
</head>
<html>
<body>
<nav>
<img class = "logo" src="logo.png" width ="18%" height="8.5%"> 
  <ul>
    <li><a class ="#" href = "homepageAFT.php">home</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="creategame.php">create game</a></li>
    <li><a href = "#"><a class="active" href="#">account</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="signout.php">signout</a></li>
  </ul>
</nav>
<body style="background-image: url('back.jpg');background-repeat:no-repeat;
background-size:100% 91.5%;background-attachment:fixed;background-position:bottom;">

<body>
<?php
session_start();
$username = $_SESSION["username"];
$games = $_SESSION["games"];
$wins = $_SESSION["wins"];

echo " <div class='card'>";
  echo "<!-- <img src='/w3images/team2.jpg' alt='John' style='width:100%'> -->";
 echo "<h1>".$username."</h1>";
 echo" <br>";
  echo "<h3>Total Games : ".$games."</h3>";
 echo "<h3>Wins : ".$wins."</h3>";

 echo "<!-- <p><button>Edit Profile</button></p> -->";
echo "</div>";
?>

</body>
</html>
