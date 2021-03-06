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

input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left: 500px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left: 500px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left: 500px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left: 500px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
  
input[type=submit] {
  width: 50%;
  background-color: #0082e6;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  margin-left: 500px;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
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
img{
    position:absolute;
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
    <title>Sign Up</title>
</head>
<html>
<head>

</head>
<body>
<nav>
<img class = "logo" src="logo.png" width ="18%" height="8.5%" opacity="1"> 
  <ul>
    <li><a class ="#"><a class="btn btn-outline-primary" href="homepage.php">home</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="signin.php">create game</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="signin.php">signin</a></li>
    <li><a href = "#"><a class="active" href="signup.php">signup</a></li>
  </ul>
</nav>
</style>
<body style="background-image: url('back.jpg');background-repeat:no-repeat;
background-size:100% 91.5%;background-attachment:fixed;background-position:bottom;">
<div>
  <form action="reg.php" method="post"><!--Action-->
  <input type ="email" placeholder="email" name ="email" id="email" required>
  <input type ="text" placeholder="username" name ="username" id="username1" required>
<input type ="password" placeholder="password" name ="password" id="password" required>
	<span id='message'></span><br>
 <input type="checkbox" value= ""  id="condition" required style ="margin-left:500px "> 
 <label for="condition" > I agree on CONNECT 4 Conditions of Use and Privacy Notice</label> <br>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>