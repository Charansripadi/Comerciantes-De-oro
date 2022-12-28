<!DOCTYPE html>
<html>
<style>
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
</style>
<body>
  <form action="http://localhost/newproject/emm.php" method ="post">
<h1 id="Register"><center><b> Exchange</b></center></h1>
<br>
<br>
<div>
  <form action="/action_page.php">
    <center><label for="fname"><b>First Name</b></label>
    <input type="fname" id="first" name="first" placeholder="Your first name"></center>
<br>
<br>
<br>
    <center><label for="lname"><b>Last Name</b></label>
    <input type="lname" id="last" name="last" placeholder="Your last name"></center>
<br>
<br>
<br>
<center>
<form action="/action_page.php">
<b>Which type of ornament </b>:
	<label><input type="radio" name="woo"/>Gold</label>
	<label><input type="radio" name="woo"/>Silver</label>	
</center>
<br>
<br>
<br>
	<center><label for="email"><b>Professional Email</b></label>
     <input type="email" placeholder="Enter Email" name="email" id="email" required></center>
<br>
<br>
<br>
    <center><label for="Enter the Item to be Exchanged"><b>Enter the Item to be Exchanged</b></label>
    <input type="lname" id="eie" name="eie" placeholder="Enter the Item"></center>
<br>
<br>
<br>
	<center><label for="password"><b>Enter the weight</b></label>
	<input type="number" placeholder="" name="ew" id="ew" min="1" max="1000" required>gm.</center>
<br>
<br>
<br>
<br>
	<center><label for="phone number"><b>Phone Number</b></label>
     <input type="phonenumber" placeholder="Enter Phone number" name="phoneno" id="phoneno" required></center>
<br>
<br>
<center><p>By applying this form you have to agree our <a href="Terms & Privacy Policy.html">Terms & Privacy Policy</a>.</p></center>
    <center><input type="submit"value="Submit" onclick="window.location.href='login.html'"></center> 	

  </form>

</div>
</form>
</body>
</html>