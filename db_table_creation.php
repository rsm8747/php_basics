<?php
 echo"Database connection<br>";
 $servername="localhost";
 $username="root";
 $password="root";
 $database="rahul_practise";
 
 $conn=mysqli_connect($servername,$username,$password,$database);
 if(!$conn){
	die("Sorry Failed to connection".mysqli_connect_error());
 }
 else{
		echo"<br>connection is success";
 }
 $sql="CREATE TABLE 'trip'('sno' INT(6) NOT NULL AUTO INCEMENT,'name' VARCHAR(12) NOT NULL,'dest' VARCHAR(4) NOT NULL,PRIMARY KEY('sno'))";
 $result=mysqli_query($conn,$sql);
 if(!$result){
	die("<br><br>IS created");
 }
 else{
		echo"<br>not created   ".mysqli_connect_error($conn);
 }
?>