<!--  This is a PHP script that handles user login functionality. It starts a session, includes a
connection to the database, and retrieves the user's mobile number, password, and role from a form
submission using the POST method. It then checks if the user's credentials match any records in the
database and if so, retrieves the user's data and stores it in session variables. It also retrieves
data for all groups in the database with a role of 2 and stores it in a session variable. If the
login is successful, the user is redirected to the dashboard page. If the login fails, an alert is
displayed and the user is redirected back to the login page.  -->
<?php
    session_start();
    include("connection.php");

    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];

    $check = mysqli_query($connect, "select * from user where mobile='$mobile' and password='$pass' and role='$role' ");
       
    if(mysqli_num_rows($check)>0)
    {
        $getGroups = mysqli_query($connect, "select name, photo, votes, id from user where role=2 ");
        if(mysqli_num_rows($getGroups)>0)
        {
            $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);// mysqli_fetch_all($getGroups, MYSQLI_ASSOC); fetches all arrays available 
            $_SESSION['groups'] = $groups;
        }
        $data = mysqli_fetch_array($check);//mysqli_fetch_array($check) fetches single user data
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;

        // To redirect the user to the dashboard page after a successful login.
        echo '<script>
                window.location = "../routes/dashboard.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "../";
            </script>';
         }
    
?>