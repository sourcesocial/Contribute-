<?php
$servername = "localhost";
$dbusername = "staralien";
$pass = "_!kz.4b@dwGm";
$dbname = "sign up new";


$fullname=$_POST['fullname'];
$username=$_POST['username'];
$whatsapp=$_POST['whatsapp'];
$password=$_POST['password'];
$codelangs=$_POST['codelangs'];

// Create connection
$conn = new mysqli($servername, $dbusername, $pass, $dbname);
// Check connection
if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO newusers (fullname, username, whatsapp, password,  codelangs)
VALUES ( '$fullname', '$username', '$whatsapp',  '$password', '$codelangs');";

if ($conn->query($sql) === TRUE) {
header("location: index.html");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

?>