<?php
session_start();
// Include the connection file
include("connection.php");

// Perform input validation and sanitization
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $cnum = test_input($_POST['cnum']);
    $pass = test_input($_POST['pass']);
    $cpass = test_input($_POST['cpass']);
    $add = test_input($_POST['add']);
    $role = test_input($_POST['role']);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Validate required fields
if (empty($name) || empty($email) || empty($pass) || empty($cpass) || empty($role) || empty($cnum)) {
    echo '<script>alert("All fields are required."); window.location = "../routes/register.php";</script>';
    exit;
}

// Validate password match
if ($cpass != $pass) {
    echo '<script>alert("Passwords do not match."); window.location = "../routes/register.php";</script>';
    exit;
}

// Validate password complexity
if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/", $pass)) {
    echo '<script>alert("Password should be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one special character, and one number."); window.location = "../routes/register.php";</script>';
    exit;
}

// Hash the password
$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

// Generate token to identify the user
$token = bin2hex(random_bytes(15)); // 15 character token



// Set the status to "inactive" by default for newly registered candidates
$status = "inactive";

// Perform file type validation for image upload
$allowedExtensions = ['jpg', 'jpeg', 'png'];
$image = $_FILES['image']['name'];
$fileExtension = strtolower(pathinfo($image, PATHINFO_EXTENSION));

if (!in_array($fileExtension, $allowedExtensions)) {
    echo '<script>alert("Invalid file type. Only JPG, JPEG, and PNG files are allowed."); window.location = "../routes/register.php";</script>';
    exit;
}

// Move the uploaded file to a secure location
$uploadDir = '../uploads/';
$targetFile = $uploadDir . basename($image);

if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
    // Escape and insert the sanitized data into the database
    $name = mysqli_real_escape_string($connect, $name);
    $email = mysqli_real_escape_string($connect, $email);
    $cnum = mysqli_real_escape_string($connect, $cnum);
    $add = mysqli_real_escape_string($connect, $add);
    $role = mysqli_real_escape_string($connect, $role);

    // Check if email already exists
    $search_email = "SELECT * FROM user WHERE email = '$email'";
    $query = mysqli_query($connect, $search_email);

    if (!$query) {
        $error = mysqli_error($connect);
        echo "Query execution failed: " . $error;
        exit;
    }

    $email_count = mysqli_num_rows($query);

    if ($email_count < 1) {
        $insert = mysqli_query($connect, "INSERT INTO user (name, email, cnum, password, address, photo, status, votes, role, token, active_status) VALUES ('$name', '$email', '$cnum', '$hashedPassword', '$add', '$image', 0, 0, '$role', '$token', '$status')");

        if ($insert) {
            // Send the account activation email to the user
            $verifyLink = "http://localhost/voting_system/api/activate.php?token=$token"; // activation page url

            require_once '../vendor/autoload.php';

            // Create the Transport
            $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
                ->setUsername('dhakaladdy00@gmail.com')
                ->setPassword('mhfmpwllcylsgdvw')
            ;

            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);

            // Create a message
            $message = (new Swift_Message('Click the link to verify your account'))
                ->setFrom(['dhakaladdy00@gmail.com' => 'Addy'])
                ->setTo([$email => $name])
                ->setBody('Dear ' . $name . ', To verify your account, click on the following link: ' . $verifyLink . '  If you did not request an account verification, please ignore this email. Best regards, The Online Voting System Team')
            ;

            // Send the message
            $result = $mailer->send($message);
            if ($result) {
                $_SESSION['msg'] = "Check your email to activate your account!  $email";

                echo '<script>
                    alert("An account activation link has been sent to your email. Please check your inbox.");
                    window.location = "../routes/candidate_dashboard.php";
                </script>';
            } else {
                // Failed to send the email
                echo '<script>
                    alert("Failed to send the account activation email. Please try again later.");
                    window.location = "../routes/register.php";
                </script>';
            }
        } else {
            $error = mysqli_error($connect);
            echo "Query execution failed: " . $error;
            exit;
        }
    } else {
        echo "<script> alert('This email already exists! Try with another one'); window.location = '../routes/candidate_register.php';</script>";
        exit;
    }
} else {
    echo '<script>alert("Error occurred while uploading the image."); window.location = "../routes/candidate_register.php";</script>';
    exit;
}
?>
