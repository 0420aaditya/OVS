<!-- This is an HTML code for a login page of an online voting system. It includes a form for users to
enter their mobile number, password, and role (either voter or candidate) to log in. The page also
includes custom CSS styles and uses Bootstrap for styling and JavaScript dependencies. -->
<!DOCTYPE html>
<html>
<head>
    <title>Online voting system - Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
            <form action="api/login.php" method="POST">
                <div class="form-group">
                    <input type="number" name="mob" class="form-control" placeholder="Enter mobile" required>
                </div>
                <div class="form-group">
                    <input type="password" name="pass" class="form-control" placeholder="Enter password" required>
                </div>
                <div class="form-group">
                    <select name="role" class="form-control">
                        <option value="1">Voter</option>
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
</body>
</html>
