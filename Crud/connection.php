<?php

$conn=new mysqli("localhost","root","","crud_test");
if($conn->connect_errno){
	echo "Failed to connect to MySQL:" .$conn->connect_error;
}/*else
	echo "OK";*/

?>