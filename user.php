<?php
session_start();
$_m=$_POST["em"];
$_p=$_POST["password"];
$server='Localhost:3306';
$user='root';
$password='';
$database='SFdb';
$conc=new mysqli($server,$user,$password,$database);
$insert=mysqli_query($conc,"SELECT * FROM user_log WHERE Email_id='$_m' AND UPassword='$_p'");
if($insert->num_rows>0)
{
    $display=mysqli_query($conc,"SELECT * FROM training_details WHERE Email_id='$_m'");
    if($display->num_rows>0){
        echo '<script>alert("Your have successfully Login!")</script>';
    $_SESSION["id"]=$_m;
    header("location:details.php");
    }else{
        echo '<script>alert("Your have successfully Login!")</script>';
    $_SESSION["id"]=$_m;
    header("location:user.php");
    }
}
else{
    echo '<script>alert("Invalid credentials!")</script>';
    header("location:user.html");
}
?>