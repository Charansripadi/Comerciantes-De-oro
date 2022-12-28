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
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
      <button type="button" onclick="window.location.href='Signup.php'">Signup</button>
      <button type="button" onclick="window.location.href='Login1.php'">Login</button>
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
<br>
<br>
<center><h1 style="color:red;">IMPORTANT NOTE</h1></center>
<center><p> User has to login or be registered to the website to access our services</p></center>
<br>
<br>
<br>
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
