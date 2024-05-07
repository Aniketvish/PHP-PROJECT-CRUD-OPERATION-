<?php
$servername="localhost";
$username="root";
$password="";
$dbname="crud5";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    // echo "Connection ok";
}
else{
    echo "failed".mysqli_connect_error();
}

?>