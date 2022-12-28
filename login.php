<html>
<head>
<title>Response</title>
<head>
<body>
<?php
 $host = "localhost";  
 $user = "root";  
 $password = '';  
 $db_name = "signup";  
   
 $con = mysqli_connect($host, $user, $password, $db_name);  
$mysqli =new mysqli($host, $user,$password, $db_name);
if (!$mysqli) {
    echo "Connection unsuccessful!!!";
}
else
{
  
  }
  $username = $_POST['email'];  
  $password = $_POST['password'];  
    
      //to prevent from mysqli injection  
      $username = stripcslashes($username);  
      $password = stripcslashes($password);  
      $username = mysqli_real_escape_string($con, $username);  
      $password = mysqli_real_escape_string($con, $password);  
    
      $sql = "select * from data where email = '$username' and passwd = '$password'";  
      $result = mysqli_query($con, $sql);  
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      $count = mysqli_num_rows($result);  
      
      if($count == 1){  
          
          include "index1.php";

      }  
      else{  
          echo "<h1> Login failed. Invalid username or password.</h1>";  
      }     
$mysqli->close();
?>
<br><br>

</body>
</head>