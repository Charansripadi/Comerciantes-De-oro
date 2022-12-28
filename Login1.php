<html>
<head>
<style>
body{
margin: 0;
overflow: hidden;
background: #000;
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
</style>
<style>

</style>
<body>
<h1 style="color:white;"><center>LOGIN</center></h1>
</head>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form action="http://localhost/newproject/login.php" method ="post">
<center><label for="email"><b style="color:white;">Email</b></label>
<input type="email" placeholder="Enter Email" name="email" id="email" required></center>
<br>
<br>
<center><label for="password"><b style="color:white;">Password</b></label>
<input type="password" placeholder="Enter password" name="password" id="password" required></center>
<br>

<br>
<center><input type="submit"value="Submit" id="Check availability"></center> 	
<br>
<center><p style="color:white;">Don't have an account? <a href="forms333.html">Sign Up</a>.</p></center>
</form>
</body>
</html>
