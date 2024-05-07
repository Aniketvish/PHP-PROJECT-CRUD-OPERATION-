<?php
include("connection.php");
$id=$_GET['id'];
$query="SELECT*FROM form where id='$id'";
$data=mysqli_query($conn,$query);
// $total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
?>

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
        <input type="text" value="<?php echo $result['firstname'];?>" name="fname"><br><br>
        Last Name:
        <input type="text" value="<?php echo $result['lastname'];?>" name="lname"><br><br>
        Password:
        <input type="password" value="<?php echo $result['password'];?>" name="password"><br><br>
        Confirm password:
        <input type="password" value="<?php echo $result['confirmpassword'];?>" name="conpassword"><br><br>
        Gender:
        <input type="radio" name="gender"  
        <?php 
        if($result['gender'] == 'Male'){
            echo "selected";
        }
        ?>
        value="Male">Male
        <input type="radio" value="<?php echo $result['gender'];?>" name="gender" value="Female">Female<br><br>
        Email:
        <input type="email" value="<?php echo $result['email'];?>" name="email"><br><br>
        Phone:
        <input type="number" value="<?php echo $result['phone'];?>" name="phone"><br><br>
        Address:
        <input type="text" value="<?php echo $result['address'];?>" name="address"><br><br>
        <input type="submit" value="Update" name="register">
    </form>
</body>
</html>


<?php


if($_SERVER['REQUEST_METHOD']=='POST'){
    // $id=$_POST['id'];
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
    $query = "UPDATE form SET firstname='$firstname', lastname='$lastname',
    password='$password', confirmpassword='$confirmpassword', gender='$gender',
    email='$email', phone='$phone', address='$address' WHERE id='$id'";

    $data=mysqli_query($conn,$query);


    if($data){
        echo "<script>alert('Record updated')</script>";
        header("Location:display.php");
    }


    else{
        echo "failed".mysqli_connect_error();
    }
}
?>