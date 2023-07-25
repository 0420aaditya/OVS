<!DOCTYPE html>
<html>
<head>
    <title>Online voting system - Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Custom CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }
        #headerSection {
            margin-bottom: 30px;
        }
        #forgotPasswordSection {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        #forgotPasswordBtn {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        #forgotPasswordBtn:hover {
            background-color: #2180c9;
        }

        /* Responsive styles */
        @media (max-width: 576px) {
            #forgotPasswordSection {
                max-width: 100%;
                padding: 15px;
            }
            #forgotPasswordBtn {
                font-size: 16px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="headerSection">
            <h1 class="text-center">Online Voting System</h1>
        </div>
        <hr>
        <div id="forgotPasswordSection">
            <h2 class="text-center">Forgot Password</h2>
            <p class="text-center">Please provide your correct email id</p>

            <form action="../api/forgot_password.php" method="POST">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <button id="forgotPasswordBtn" type="submit" name="forgotPasswordBtn">Reset Password</button>
                <div class="text-center mt-3">
                    <a href="../">Back to Login</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JavaScript dependencies (jQuery and Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
