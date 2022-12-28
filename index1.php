<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
* {box-sizing: border-box;}

body {
        background: #ffffff;
        color: #6098FF;
        font-family: sans-serif;
        font-size: 16px;
      }
      .wrapper {
        margin: 80px auto;
        text-align: center;
        width: 100%;
        position: relative;
      }
      .button {
        background: #76b7f0;
        padding: 15px 50px;
        margin: 10px 4px;
        color: #ffffff;
        font-family: sans-serif;
        text-transform: uppercase;
        text-align: center;
        position: relative;
        text-decoration: none;
        display: inline-block;
      }
      .button {
        border: 1px solid transparent;
        -webkit-transition: all 0.4s cubic-bezier(.5, .24, 0, 1);
        transition: all 0.4s cubic-bezier(.5, .24, 0, 1);
      }
      .button::before {
        content: '';
        position: absolute;
        left: 0px;
        bottom: 0px;
        z-index: -1;
        width: 0%;
        height: 1px;
        background: #ff0606;
        box-shadow: inset 0px 0px 0px #ff0000;
        display: block;
        -webkit-transition: all 0.4s cubic-bezier(.5, .24, 0, 1);
        transition: all 0.4s cubic-bezier(.5, .24, 0, 1)
      }
      .button:hover::before {
        width: 100%;
      }
      .button::after {
        content: '';
        position: absolute;
        right: 0px;
        top: 0px;
        z-index: -1;
        width: 0%;
        height: 1px;
        background: #ff0000;
        -webkit-transition: all 0.4s cubic-bezier(.7, .25, 0, 1);
        transition: all 0.4s cubic-bezier(.7, .25, 0, 1)
      }
      .button:hover::after {
        width: 100%;
      }
      .button:hover {
        border-left: 10px solid #d4ff00;
        border-right: 10px solid #d9f600;
      }

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .login-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
.mySlides {display:none;}
</style>
</head>
<body>
  <form action="http://localhost/newproject/login.php/signup-1.php" method ="post">
    <h1><center>Comerciantes De Oro</center></h1>
<div class="topnav">
  
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
  <div class="login-container">
  <?php
 $host = "localhost";  
 $user = "root";  
 $password = '';  
 $db_name = "signup";  
   
 $con = mysqli_connect($host, $user, $password, $db_name);  
$mysqli =new mysqli($host, $user,$password, $db_name);
echo "Welcome ".$row['first']."";
?>
  </div>
 
</div>

<p>The Marking Notation:</p>

<div class="w3-content w3-section" style="max-width:550px">
  <img class="mySlides" src="hallmarking.jpg" style="width:100%">
  <img class="mySlides" src="hm.jpg" style="width:100%">
  <img class="mySlides" src="hm1.PNG" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<center>
<a href="HALLMARKING.php" class="button">HALLMARKING</a>
<a href="goldpurchasing.php" class="button">Gold Purchasing</a>
<a href="Exchange.php" class="button">Gold Exchanging</a>
</center>
<body>
  <head>
    <p ><center><b><u><i>ABOUT</i></u></b></center>
    <center><br><br>An Act to provide for the establishment of a national standards body for the harmonious development
    <br> of the activities of standardisation, conformity assessment and quality assurance of goods, articles, 
    <br>processes, systems and services and for matters connected therewith or incidental thereto.
    <br>The Gold Standard Foundation (GSF) is committed to protecting your privacy and providing a safe
    <br> online experience.This Privacy Policy applies to the www.goldstandard.org website and any other 
    <br>web properties which are owned or operated by GSF (collectively, the "Site")and governs data collection 
    <br>and usage by GSF. By using the Site, you consent to the collection, storage,
    <br> use and disclosure of your personal information as described in this Privacy Policy. 
    <br>If you do not agree to the practices in this Privacy Policy, please do not use this Site. 
    <br>Each time you use this Site, the current version of the Privacy Policy will govern your use.
    <br> Accordingly, when you use this Site, you should check the date of this Privacy Policy (which appears at the top)
    <br> and review any changes since the last version.</center></p>
  </head>
</body>
  </form>
</body>
</html>
