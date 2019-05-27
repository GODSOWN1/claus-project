<?php 
$servername= "localhost";
$username= "root";
$password= "";

/* this is to connect to our main database*/
$con=mysqli_connect("localhost","root","") or die("Unable to connect");

/* this is to select the particular database we want to connect to*/
mysqli_select_db($con,"quizzer");
 ?>
