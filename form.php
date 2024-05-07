<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        First Name:
        <input type="text" name="fname"><br><br>
        Last Name:
        <input type="text" name="lname"><br><br>
        Password:
        <input type="password" name="password"><br><br>
        Confirm password:
        <input type="password" name="conpassword"><br><br>
        Gender:
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female<br><br>
        Email:
        <input type="email" name="email"><br><br>
        Phone:
        <input type="number" name="phone"><br><br>
        Address:
        <input type="text" name="address"><br><br>
        <input type="submit" value="Register" name="register">
    </form>
</body>
</html>


<?php
include("connection.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_POST['id'];
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['conpassword'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $query="INSERT INTO form VALUES('$id','$firstname','$lastname','$password',
    '$confirmpassword','$gender','$email','$phone','$address')";
    $data=mysqli_query($conn,$query);
    if($data){
        echo "Data Sent Succesfully";
    }
    else{
        echo "failed".mysqli_connect_error();
    }
}
?>