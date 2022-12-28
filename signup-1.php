<html>
<head>
<title>Response</title>
<head>
<body>
<?php
$user ='root';
$password= '';
$database = 'signup';
$servername='localhost:3306';
$mysqli =new mysqli($servername, $user,$password, $database);
if (!$mysqli) {
    echo "Connection unsuccessful!!!";
}
else
{
  include "index.php";
  }
$sql ="INSERT INTO `data`(`first`, `last`, `email`, `passwd`, `repasswd`, `phoneno`, `country`) VALUES ('$_POST[first]','$_POST[last]','$_POST[email]','$_POST[passwd]','$_POST[repasswd]','$_POST[phoneno]','$_POST[country]')";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<br><br>

</body>
</head