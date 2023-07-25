<!DOCTYPE html>
<html>
<head>
    <title>Online voting system - Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Custom CSS styles */
        #headerSection {
            margin-bottom: 30px;
        }
        #loginSection {
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

        <div id="loginSection">
            <h2 class="text-center">Login</h2>
            <form action="../api/candidate_login.php" method="POST">
                <div class="form-group position-relative">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group position-relative">
                    <input type="password" name="pass" id="password" class="form-control" placeholder="Enter password" required>
                    <span class="eye-icon" onclick="togglePasswordVisibility('password')">
                        <i id="showPasswordIcon" class="fas fa-eye"></i>
                    </span>
                </div>
                <div class="form-group">
                    <select name="role" class="form-control">
                        <option value="2">Candidate</option>
                    </select>
                </div>
                <button id="loginbtn" type="submit" name="loginbtn">Login</button>
                <div class="text-center mt-3">
                    New user? <a href="routes/register.php">Register here</a>
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
