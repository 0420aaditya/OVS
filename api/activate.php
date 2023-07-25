<?php
session_start();
include("connection.php");
if(isset($_GET['token']))
{
$token = $_GET['token'];
$activate = "update user set active_status='active' where token='$token' ";
$query = mysqli_query($connect,$activate);
$err = mysqli_error($connect);
echo $err ;
if($query)
{
    if(isset($_SESSION['msg']))
    {
        $_SESSION['msg'] = "Account activated successfully";
        header('location:../index.php');
    }else{
        $_SESSION['msg'] = "You are logged out";
        header('location:../index.php');
    }
}else{
    $_SESSION['msg'] = "Account not Activated!";
    header('location:../routes/register.php');//activate xaina vane properly register garni
}
}

?>