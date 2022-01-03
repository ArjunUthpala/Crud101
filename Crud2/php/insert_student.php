<?php
require("connection.php");
$sql="INSERT INTO `student` (`First_name`, `Last_name`, `Email`, `Mobile`) VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[email]', '$_POST[mob]');";
if($conn->query($sql)===true)
    echo("Data inserted successfully!");
else
	echo "Error :".$conn->error;
?>