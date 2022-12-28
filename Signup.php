<!DOCTYPE html>
<html>
  <head><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script></head>
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
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<h1 style="color:green;"><center>Signup</center></h1>
<div>
  <form action="http://localhost/newproject/signup-1.php" method ="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="first" placeholder="Your name..">
<br>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="last" placeholder="Your last name..">
  

<br>
<br>
  <label for="email"><b>Email</b></label>
     <input type="email" placeholder="Enter Email" name="email" id="email" required>
     <span id="availability"></span>
<br>
<br>
  <label for="password"><b>password</b></label>
  <input type="password" placeholder="Enter password" name="passwd" id="password" required>
<br>
<br>
  <label for="Repeat password"><b>repeat pasword</b></label>
     <input type="password" placeholder="Repeat password" name="repasswd" id="Repeat password" required>
<br>
<br>
  <label for="phone number"><b>Phone Number</b></label>
     <input type="" placeholder="Enter Phone number" name="phoneno" id="Phone" required>
<br>
<br>
    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
  <option value="Ind">India</option>
    </select>
  
    <input type="submit" value="Submit" id="Check availability">
  </form>
</div>

</body>
</html>
<script>  
 $(document).ready(function(){  
   $('#email').blur(function(){

     var username = $(this).val();

     $.ajax({
      url:'check.php',
      method:"POST",
      data:{user_name:email},
      success:function(data)
      {
       if(data != '0')
       {
        $('#availability').html('<span class="text-danger">Username not available</span>');
        $('#Check availability').attr("enabled", true);
       }
       else
       {
        $('#availability').html('<span class="text-success">Username Available</span>');
        $('#Check availability').attr("disabled", false);
       }
      }
     })

  });
 });  
</script>