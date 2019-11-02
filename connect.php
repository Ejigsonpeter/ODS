<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "casted_cipher";
//connect
$conn = mysqli_connect($host,$user,$pass,$database);

if ($conn){
    //echo
}
else{
    echo 'failed';
}
mysqli_select_db($conn,$database);
?>