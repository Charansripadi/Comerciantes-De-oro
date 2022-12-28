<!DOCTYPE html>
<html>
<style>
  * {box-sizing: border-box;}
body {
  background-image: url('gold22.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
 
  input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 15px 32px;
  margin: 4px 2px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  text-align: center;

}

input[type=submit]:hover {
  background-color: #45a049;
}


div {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 20px;
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
</style>
<body>
<form action="http://localhost/newproject/halmm.php" method ="post">
  <h1><center>Comerciates De Oro</center></h1>
  <div class="topnav">
  
  <a class="active" href="index.php">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
  </div>
<h1 id="Register"><center><b>Hallmarking</b></center></h1>
<br>
<br>

  <form action="/action_page.php">
    <center><label for="fname"><b style="color:red;">First Name</b></label>
    <input type="fname" id="first" name="first" placeholder="Your name.."></center>
<br>
<br>
<br>
    <center><label for="lname"><b style="color:red;">Last Name</b></label>
    <input type="lname" id="last" name="last" placeholder="Your last name.."></center>
<br>
<br>
<br>
<center>
<form action="/action_page.php">
<b style="color:red;">Which type of ornament </b>:
	<label><input type="radio" value="gold" name="too" id="too"/>Gold</label>
	<label><input type="radio"  value="silver" name="too" id="too"/>Silver</label>	
</center>
<br>
<br>
<br>
	<center><label for="email"><b style="color:red;">Professional Email</b></label>
     <input type="email" placeholder="Enter Email" name="email" id="email" required></center>
<br>
<br>
<br>
	<center><label for="password"><b style="color:red;">Number Of items to get Hallmarked?</b></label>
	<input type="hall" name="hall" id="hall" min="1" max="100" required></center>
<br>
<br>
<br>
<br>
	<center><label for="phone number"><b style="color:red;">Phone Number</b></label>
     <input type="phoneno" placeholder="Enter Phone number" name="phoneno" id="phoneno" required></center>
<br>
<br>
<center><p style="color:red;">By applying this form you have to agree our <a href="Terms & Privacy Policy.html">Terms & Privacy Policy</a>.</p></center>
    <center><input type="submit"value="Submit" </center> 	
  </form>
</body>
</html>