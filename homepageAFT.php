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
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePageAfter </title>
</head>
<html>
<head>

</head>
<body>
<nav>
<img class = "logo" src="logo.png" width ="18%" height="8.5%"> 
  <ul>
    <li><a class ="active" href = "#">home</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="creategame.php">create game</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="account.php">account</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="signout.php">signout</a></li>
  </ul>
</nav>
<body style="background-image: url('back.jpg');background-repeat:no-repeat;
background-size:100% 91.5%;background-attachment:fixed;background-position:bottom;">

<iframe style = "margin:10% 30%" width="560" height="315" src="https://www.youtube.com/embed/ylZBRUJi3UQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</body>
</html>