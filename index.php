<!DOCTYPE html>
<html>
<head>
    <title>Online voting system - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="./images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <style>
        /* Custom CSS styles */
        #headerSection {
            margin-bottom: 30px;
        }
        #loginSection {
            width: 100%;
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
        @media (min-width: 768px) {
            #loginSection {
                max-width: 500px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="headerSection">
            <h1 class="text-center">Online Voting System</h1>  
        </div>
        <div class="text-center mt-1">
            <p class="bg-success text-white ">
                <?php 
                session_start();  
                if(isset($_SESSION['msg'])){
                    echo  $_SESSION['msg'];
                }
                ?>
            </p>
        </div>
        <hr>

        <div id="loginSection">
            <h2 class="text-center">Login</h2>
            <form action="api/login.php" method="POST">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" name="pass" id="password" class="form-control" placeholder="Enter password" required>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-eye" id="showPasswordIcon" onclick="togglePasswordVisibility()"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <select name="role" class="form-control">
                        <option value="1">Voter</option>
                    </select>
                </div>
                <button id="loginbtn" type="submit" name="loginbtn">Login</button>
                <div class="text-center mt-3">
                    New user? <a href="routes/register.php">Register here</a>
                </div>
                <div class="text-center mt-3">
                    <a href="routes/forgot_password.php">Forgot password</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JavaScript dependencies (jQuery and Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Font Awesome JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var passwordIcon = document.getElementById("showPasswordIcon");
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
