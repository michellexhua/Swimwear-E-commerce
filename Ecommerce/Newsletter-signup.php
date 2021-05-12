<?php 
$host = "localhost";  
$user = "hua112_eshop"; 
$password = "password";  
$dbase = "hua112_eshop"; 
$table = "Customer";  

$first_name= $_POST['firstname']; 
$last_name= $_POST['lastname']; 
$email= $_POST['email']; 

header("Location:newsletter.php");
  
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
$query= "INSERT INTO $table  ". "VALUES ( NULL, '$first_name', '$last_name', '$email')"; 
 
mysqli_query ($dbc, $query) 
or die ("Error querying database"); 
 
echo '<script>alert("You have been successfully added.")</script>' . '<br>'; 
mysqli_close($dbc); 

?> 