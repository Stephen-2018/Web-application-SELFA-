<?php
   $server="127.0.0.1";
   $username="root";
   $password="";
   $database="selfa";

   $conn=mysqli_connect($server,$username,$password,$database);

   if(!$conn){
       die("connection failed".mysqli_connect_error());
   }
?>