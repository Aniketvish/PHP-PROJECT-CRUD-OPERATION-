<?php
include("connection.php");
$id=$_GET['id'];
$query="DELETE FROM form where id='$id'";
$data=mysqli_query($conn,$query);
if($data){
    echo "Record Deleted";
    header("Location:display.php");
}
else{
    echo "Error".mysqli_connect_error();
}

?>