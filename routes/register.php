<!-- This is an HTML code for a registration page of an online voting system. It includes a form with
various input fields such as name, mobile number, password, address, image upload, and role
selection. The form is submitted to a PHP file for processing. The code also includes Bootstrap CSS
and JavaScript dependencies for styling and functionality.  -->
<!DOCTYPE html>
<html>
<head>
    <title>Online voting system - Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
    </style>
</head>
<body>
    <div class="container">
        <div id="headerSection">
            <h1 class="text-center">Online Voting System</h1>  
        </div>
        <hr>

        <div id="registrationSection">
            <h2 class="text-center">Registration</h2>
            <form action="../api/register.php" method="POST" enctype="multipart/form-data">
            <!-- enctype="multipart/form-data" for uploading image -->
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="number" name="mob" class="form-control" placeholder="Mobile Number" required>
                </div>
                <div class="form-group">
                    <input type="password" name="pass" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="password" name="cpass" class="form-control" placeholder="Confirm Password" required>
                </div>
                <div class="form-group">
                    <input type="text" name="add" class="form-control" placeholder="Address" required>
                </div>
                <div class="form-group">
                    <label for="profile">Upload image:</label>
                    <input type="file" id="profile" name="image" class="form-control-file" required>
                </div>
                <div class="form-group">
                    <label for="role">Select your role:</label>
                    <select name="role" class="form-control">
                        <option value="1">Voter</option>
                        <option value="2">Candidate</option>
                    </select>
                </div>
                <button id="loginbtn" type="submit" name="registerbtn">Register</button>
                <div class="text-center mt-3">
                    Already a user? <a href="../">Login here</a>
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
