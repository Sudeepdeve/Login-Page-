<?php
$servername="localhost";
$username="root";
$password="12345";

// connection object 

$conn=mysqli_connect( $servername,$username,$password);
 
if (!$conn) {
    die("Once ask to sudeep" .mysqli_connect_error_());
}
else{
    echo"You are welcomed to the Website";
}



?>
