<?php
 echo"Database connection<br>";
 $servername="localhost";
 $username="root";
 $password="root";
 $conn=mysqli_connect($servername,$username,$password);
 echo"<br>DB is connected";
 
 $sql="create datbase rahul_practise2";
 mysqli_query($conn,$sql);
 echo"<br>DB is Created";
?>