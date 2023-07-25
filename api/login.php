<?php
    session_start();
    include("connection.php");
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];
    
    // Protect from SQL injection
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $pass = mysqli_real_escape_string($connect, $_POST['pass']);
    $role = mysqli_real_escape_string($connect, $_POST['role']);
    
    try {
        // Retrieve the hashed password from the database
        $result = mysqli_query($connect, "SELECT * FROM user WHERE email='$email' AND role='$role' AND active_status='active'");
        
        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_array($result);
            $hashedPassword = $data['password'];

            // Compare the hashed password with the entered password
            if (password_verify($pass, $hashedPassword)) {
                // Passwords match, user is authenticated
                
                // Retrieve additional data from the database if needed
                $getGroups = mysqli_query($connect, "SELECT name, photo, votes, id FROM user WHERE role=2");
                if (mysqli_num_rows($getGroups) > 0) {
                    $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
                    $_SESSION['groups'] = $groups;
                }

                // Store user session data
                $_SESSION['id'] = $data['id'];
                $_SESSION['status'] = $data['status'];
                $_SESSION['data'] = $data;
                
                // Redirect to the dashboard or desired page
                echo '<script>
                        window.location = "../routes/dashboard.php";
                    </script>';
            } else {
                // Passwords do not match
                throw new Exception('Wrong password!');
            }
        } else {
            // User not found in the database
            throw new Exception('No User found!');
        }
    } catch (Exception $e) {
        // Catch any exception and handle the error gracefully
        echo '<script>
                alert("'.$e->getMessage().'");
                window.location = "../";
            </script>';
    }
?>
 