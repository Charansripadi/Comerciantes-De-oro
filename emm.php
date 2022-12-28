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
    echo "Successfully Your application done";
 
  }
$sql ="INSERT INTO `ex`(`first`, `last`,`woo`, `email`, `eie`, `ew`, `phoneno`) VALUES ('$_POST[first]','$_POST[last]','$_POST[woo]','$_POST[email]','$_POST[eie]','$_POST[ew]','$_POST[phoneno]')";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<br><br>

</body>
</head