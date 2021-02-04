<!DOCTYPE html>
<html>
<style>

  /* game css */
  
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

    * {
	border: 0;
	padding: 0;
}

.game-board {
	background: #0074B3;
  width: 900px;
  padding-left: 0px;
  padding-right: 45px;
  cursor: pointer;
  border-radius:20px;
  box-shadow: 0 4px 8px 4px rgba(0, 0, 0, 0.6);
}

.column {
	width: 100px;
	display: inline-block;
} 

.column:hover  circle.free{
	fill: #D5E4ED;
} 

circle.free {
	fill: #fff;
}

circle.red {
	fill: #D50000;
}

circle.yellow {
	fill: #DAD400;
}

/* other css  */

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
  border-radius: 0px;
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
    overflow: hidden;
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
  max-width: fit-content;
  height: 100;
  margin: -4% auto;
  text-align: center;
  font-family: arial;
  background-color:#808080;
  border-radius:25px;
  /* padding:20px; */
  width:60%;
  color:white;
}
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
  max-width: fit-content;
  height: fit-content;
  margin: 3% 0% auto 2%;
  text-align: center;
  font-family: arial;
  background-color:#D50000;
  border-radius:25px;
  /* padding:20px; */
  width:60%;
  color:white;
}
.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
  max-width: fit-content;
  height: fit-content;
  margin: -5% 2% 2% auto;
  text-align: center;
  font-family: arial;
  background-color:#DAD400;
  border-radius:25px;
  /* padding:20px; */
  width:60%;
  color:black;
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameAfter</title>
</head>
<html>
<head>
</head>
<body>
<nav>
<?php
session_start();
$guest=$_POST["player2"];
$first=$_POST["begins"];
$wins=0;

// $username = $_SESSION["username"];
// $guestname = $_SESSION["guestname"];
?>
<img class = "logo" src="logo.png" width ="18%" height="8.5%" opacity="1">   
<ul>
    <li><a class ="#"><a class="btn btn-outline-primary" href="homepageAFT.php">home</a></li>
    <li><a href = "#"><a class="active" href="creategame.php">create game</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="account.php">account</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="signout.php">signout</a></li>
  </ul>
</nav>

</style>
<body style="background-image: url('back.jpg');background-repeat:repeat-y;
background-size:100% 91.5%;background-attachment:fixed;background-position:bottom;">
<!-- <img src ="back.jpg" position="absolute" width ="100%" height="90%"> -->
<!-- <div style="background-image: url('back.jpg');"> -->


<!-- ///////////////////////////////////////////// -->
<div class="card1">
  <?php
  echo "<h1>".$_SESSION["username"]."</h1>";
  ?>
  </div>
  <div class="card2">
  <?php
  echo "<h1>".$guest."</h1>";
  ?>
  </div>

  <div class = "card">
  <body>
  <div class="game-board">
    <div class="column" id="column-0" data-x="0">
      <svg height="100" width="100" class="row-5">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-4">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-3">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-2">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-1">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-0">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
    </div>
    <div class="column"  id="column-1" data-x="1">
      <svg height="100" width="100" class="row-5">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-4">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-3">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-2">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-1">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-0">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
    </div>
    <div class="column" id="column-2" data-x="2">
      <svg height="100" width="100" class="row-5">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-4">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-3">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-2">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-1">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-0">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
    </div>
    <div class="column" id="column-3" data-x="3">
      <svg height="100" width="100" class="row-5">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-4">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-3">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-2">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-1">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-0">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
    </div>
    <div class="column" id="column-4" data-x="4">
      <svg height="100" width="100" class="row-5">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-4">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-3">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-2">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-1">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-0">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
    </div>
    <div class="column" id="column-5" data-x="5">
      <svg height="100" width="100" class="row-5">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-4">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-3">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-2">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-1">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-0">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
    </div>
    <div class="column" id="column-6" data-x="6">
      <svg height="100" width="100" class="row-5">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-4">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-3">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-2">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-1">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
      <svg height="100" width="100" class="row-0">
        <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
      </svg> 
    </div>
  </div>
  
  <!-- fetch JS class  -->
  <script>
  (function() {

var ConnectFour = function() {
/////////////////////////////////////////
    gameBoard = {};
    var n = "<?php echo $first ?>" ;
    var any= "b1";
    if (n==any) {
      currentPlayer = 'red';
    }
    else{
    currentPlayer = 'yellow';
    }
/////////////////////////////////////////
    numRows = 6;
    numCols = 7;
    numTurns = 0;
    
    _init = function() {
        
        var columns;
        
        columns = document.querySelectorAll('.column');
        
        Array.prototype.forEach.call(columns, function(col) {
            col.addEventListener('click', function() {
                markNextFree(col.getAttribute('data-x'));
            });
        });
        
        for(var x = 0; x <= numRows; x++) {
        
            gameBoard[x] = {};
            
            for(var y = 0; y <= numCols; y++) {
                gameBoard[x][y] = 'free';
            }
        }
        
    };
    
    var markNextFree = function(x) {

        var nextY;
        
        nextY = false;
        
        for(var y = 0; y < numRows; y++) {
            if(gameBoard[x][y] === 'free') {
                nextY = y;
                break;
            }
        }
        
        if(nextY === false) {
            alert('No free spaces in this column. Try another.');
            return false;
        }
        
        gameBoard[x][nextY] = currentPlayer;
        
        document.querySelector('#column-'+x+' .row-'+nextY+' circle').setAttribute(
                'class', currentPlayer
        );
        
        /////////////////////////////////////////////////////////////////
        if(isWinner(parseInt(x), nextY)) {
          if(currentPlayer == 'red'){
            alert("<?php echo $_SESSION["username"] ?>" +' wins!');
            //function for wins
            <?php
            $_SESSION['wins'] = 1;
            ?>
            
            //function for finshing

          }
          else{
            alert("<?php echo $guest ?>" +' wins!');
            //function for finshing
            <?php
            $_SESSION['wins'] = 0;
            ?>
          }
          ///////////////////////////////////////////////////////////
// <?php
// $con = mysqli_connect('localhost', 'root');

// mysqli_select_db($con, 'userregistration2');

// $email=$_POST['email'];
// $pass=$_POST['password'];


// // $s = "select * from usertable2 where email='$email' && password = '$pass'";
// $result = mysqli_query($con , $s);
// $c = "update usertable2 SET games = games+1 WHERE email='$email' && password = '$pass'"
// ?>
          // resval(); //here is the problemmmmmmooooooooooo
          
         window.location.replace("homepageAFT.php");
            return true;
        }

        numTurns = numTurns + 1;

        if(numTurns >= numRows * numCols) {
            alert('It\'s a tie!');
            clearBoard();
            return true;				
        }
/////////////////////////////////////////////////////////////
        currentPlayer = currentPlayer === 'red' ? 'yellow' : 'red';

    };
    
    var clearBoard = function() {
        
        Array.prototype.forEach.call(document.querySelectorAll('circle'), function(piece) {
            piece.setAttribute('class', 'free');
        });
        
        gameBoard = {};

        for(var x = 0; x <= numRows; x++) {
        
            gameBoard[x] = {};
            
            for(var y = 0; y <= numCols; y++) {
                gameBoard[x][y] = 'free';
            }
    
      console.log(gameBoard);
        }

        numTurns = 0;
        
        return gameBoard;

    };

    var isWinner = function(currentX, currentY) {
        return checkDirection(currentX, currentY, 'vertical') || 
            checkDirection(currentX, currentY, 'diagonal') || 
            checkDirection(currentX, currentY, 'horizontal');
    };
    
    var isBounds = function(x, y) {
        return (gameBoard.hasOwnProperty(x) && typeof gameBoard[x][y] !== 'undefined');
    };

    var checkDirection = function(currentX, currentY, direction) {
    
        var chainLength, directions;
        
        directions = {
            horizontal: [
                [0, -1], [0, 1]
            ],
            vertical: [
                [-1, 0], [1, 0]
            ],
            diagonal: [
                [-1, -1], [1, 1], [-1, 1], [1, -1]
            ]
        };
        
        chainLength = 1;
        
        directions[direction].forEach(function(coords) {
            
            var i = 1;

            while( isBounds(currentX + (coords[0] * i), currentY + (coords[1] * i)) && 
                (gameBoard[currentX + (coords[0] * i)][currentY + (coords[1] * i)] === currentPlayer)
            ) {
                chainLength = chainLength + 1; 
                i = i + 1; 
            };
            
        });
        
        return (chainLength >= 4);
        
    };
    
    _init();
    
};

ConnectFour();


}
)
();
  </script>
  </body>
  </form>   
  </div>


</body>
<!-- <?php
// session_start();
// function resVal(){
    
//     $con = mysqli_connect('localhost', 'root');

//     mysqli_select_db($con, 'userregistration2');

//     $email=$_SESSION['email'];
//     $pass=$_SESSION['password'];

//     $s = "select * from usertable2 where email='$email' && password = '$pass'";

//     $result = mysqli_query($con , $s);
   
// if($_SESSION['wins'] == 1){//true
//     echo "email already exist";
//     $result = $_SESSION['wins']+1;
//     $reg="insert into usertable2(wins) values('$result')";
//     mysqli_query($con,$reg);
    
// }
//     $result = $_SESSION['games']+1;
//     $reg="insert into usertable2(games) values('$result')";
//     mysqli_query($con,$reg);

// }
?> -->

</html>