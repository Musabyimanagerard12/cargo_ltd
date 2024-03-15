<?php
$conn = mysqli_connect('localhost', 'root','','cargo');

if(!$conn){
      die("Could not connect to Database".mysqli_connect_error());
}else{
      //echo "Database connected successfully";
}
?>