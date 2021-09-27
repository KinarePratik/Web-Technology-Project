<html>
<body>
<?php
 
// Create connection
$conn = new mysqli('localhost','root','');
 
// Check connection
if (!$conn) {
    die("Connection failed: " . $mysql_error());
} 
echo "DB Connected successfully";
 
// this will select the Database sample_db
mysqli_select_db($conn,"feedback");
 
echo "\n DB is seleted as Test  successfully";
 
// create INSERT query
 
 
$sql="INSERT INTO client ( Email ,Subject,Message) VALUES ('$_POST[Email]','$_POST[Subject]','$_POST[Message]')";
 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
?>
</body>
</html>