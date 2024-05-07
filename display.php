<?php
error_reporting(0);
include("connection.php");
$query="SELECT*from form";
$data=mysqli_query($conn,$query);
// if($data){
//     echo "Data presented";
// }
// else{
//     echo "error".mysqli_connect_error();
// }
// $total=mysqli_num_rows($data);
// if($total!=0){
//     echo "Table has records";
// }
// else{
//     echo "Table has no records";
// }
// echo($total);
$total=mysqli_num_rows($data);
?>
<table border="3" cellspacing="10">
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Password</th>
        <th>Confirm Password</th>
        <th>gender</th>
        <th>Email Id</th>
        <th>Contact</th>
        <th>Address</th>
        <th width="15%">Operations</th>
        
    </tr>
    <style>
        .btn{
            color:white;
            background-color:green;
            border:none;
            padding:10px;
            border-radius:5px;
            margin-left:20px;
            cursor:pointer;

        }
        .del{
            color:white;
            background-color:red;
            border:none;
            padding:10px;
            border-radius:5px;
            margin-left:5px;
            cursor:pointer;
            align-items:center;
            justify-content:center;

        }
    </style>

<?php

if($total!=0){
    while($result=mysqli_fetch_assoc($data)){
        echo "<tr>
            <td>".$result['id']."</td>
            <td>".$result['firstname']."</td>
            <td>".$result['lastname']."</td>
            <td>".$result['password']."</td>
            <td>".$result['confirmpassword']."</td>
            <td>".$result['gender']."</td>
            <td>".$result['email']."</td>
            <td>".$result['phone']."</td>
            <td>".$result['address']."</td>
            <td><a href='update.php?id=$result[id]'>
            <input type='submit' value='Update' class='btn'></a>
            
            <a href='delete.php?id=$result[id]'>
            <input type='submit' value='Delete' class='del' onclick='return()'></a>
            
            </td>
        </tr>";
    }
}
?>
</table>


<!-- echo $result['id']." ",$result['firstname']." ".$result['lastname']." ".
        $result['password']." ".$result['conpassword']." ".$result['gender']." ".
        $result['email']." ".$result['phone']." ".$result['address']." "."<br>"; -->
<script>
    function return(){
        return confirm('Are sure you want to Delete ?');
    }

return();
</script>