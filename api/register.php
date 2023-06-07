<?php
    include("connection.php");

    $name = $_POST['name'];
    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $add = $_POST['add'];
    $image = $_FILES['image']['name']; //field name first then ['name'] by default
    $tmp_name = $_FILES['image']['tmp_name'];
    $role = $_POST['role'];

    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../routes/register.php";
            </script>';
            // ../ is used to come out of the page and the path routes/register.php is used to enter into the file followed by path
    }
    else{
        move_uploaded_file($tmp_name,"../uploads/$image");//to move the uploaded file to uploads
        $insert = mysqli_query($connect, "insert into user (name, mobile, password, address, photo, status, votes, role) values('$name', '$mobile', '$pass', '$add', '$image', 0, 0, '$role') ");
        // here status and votes are assigned to 0 
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "../";
                </script>';
        }
    }
    
?>