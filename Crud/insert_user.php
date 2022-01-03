<?php
require("connection.php");
$sql="INSERT INTO `crud` (`ID`, `FName`, `Contact`, `Email`, `PW`) VALUES ('', '$_POST[fname]', '$_POST[cnumber]', '$_POST[email]', '$_POST[password]');";
if($conn->query($sql)===true)
    echo("Data inserted successfully!");
else
	echo "Error :".$conn->error;
?>