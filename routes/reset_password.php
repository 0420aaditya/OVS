<?php
session_start(); // Add session_start() to the beginning of the file to use sessions
include("../api/connection.php");

/* `ob_start();` is a PHP function that turns on output buffering. Output buffering allows you to store
the output of your PHP script in a buffer instead of sending it directly to the browser. This can be
useful in situations where you need to modify the output before it is sent to the browser, or when
you want to prevent any output from being sent until you explicitly flush the buffer. */
ob_start();

try {
    if (isset($_POST['resetpassbtn'])) {

        if (isset($_GET['token'])) {
            
            $token = $_GET['token'];

            // Verify that the token value is received correctly
             echo $token;

            // fetch the user input
            $pass = mysqli_real_escape_string($connect, $_POST['pass']);
            $cpass = mysqli_real_escape_string($connect, $_POST['cpass']);

            // encrypt the password
            $haspass = password_hash($pass, PASSWORD_DEFAULT);

            // check both pass match or not
            if ($pass === $cpass) {
                echo $token; // This line is optional to check token value
                $updatepass = "UPDATE user SET password = '$haspass' WHERE token='$token'";
                $run = mysqli_query($connect, $updatepass);

                if ($run) {
                    $_SESSION['msg'] = "Your password has been updated";
                    header('location:../index.php');
                    exit(); // Important: Add exit() after redirection
                } else {
                    $_SESSION['failmsg'] = "Your password is not updated";
                    header('location:../routes/reset_password.php');
                    exit(); // Important: Add exit() after redirection
                }
            } else {
                echo '<script>
                    alert("Password did not match");
                    window.location = "../routes/reset_password.php";
                </script>';
            }
        } else {
            throw new Exception("No token found");
        }
    }
} catch (Exception $e) {
    echo '<script>
        alert("' . $e->getMessage() . '");
        window.location = "../routes/reset_password.php";
    </script>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Online voting system - Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Custom CSS styles */
        #headerSection {
            margin-bottom: 30px;
        }
        #registrationSection {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        #loginbtn {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .eye-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="headerSection">
            <h1 class="text-center">Online Voting System</h1>  
        </div>
        <hr>

        <div id="registrationSection">
            <h2 class="text-center">Reset Your Password</h2>
            <p><?php if(isset($_SESSION['failmsg']))
            {
               echo $_SESSION['failmsg'];
            }else{
                $_SESSION['failmsg']="";
            }
             ?></p>
            <form action="" method="POST">
                <div class="form-group position-relative">
                    <input type="password" name="pass" id="password" class="form-control" placeholder="New Password" required>
                    <span class="eye-icon" onclick="togglePasswordVisibility('password')">
                        <i id="showPasswordIcon" class="fas fa-eye"></i>
                    </span>
                </div>
                <div class="form-group position-relative">
                    <input type="password" name="cpass" id="confirmPassword" class="form-control" placeholder="Confirm Password" required>
                    <span class="eye-icon" onclick="togglePasswordVisibility('confirmPassword')">
                        <i id="showConfirmPasswordIcon" class="fas fa-eye"></i>
                    </span>
                </div>
               
                <button id="loginbtn" type="submit" name="resetpassbtn">Reset password</button>
                <div class="text-center mt-3">
                     <a href="../">Back to login</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JavaScript dependencies (jQuery and Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        function togglePasswordVisibility(inputId) {
            var passwordInput = document.getElementById(inputId);
            var passwordIcon = document.getElementById(`show${inputId.charAt(0).toUpperCase() + inputId.slice(1)}Icon`);

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordIcon.classList.remove("fa-eye");
                passwordIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                passwordIcon.classList.remove("fa-eye-slash");
                passwordIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>
</html>
