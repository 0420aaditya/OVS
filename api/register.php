<?php
// Include the connection file
include("connection.php");

// Perform input validation and sanitization
$name = mysqli_real_escape_string($connect,htmlspecialchars($_POST['name']));
$mobile = mysqli_real_escape_string($connect,htmlspecialchars($_POST['mob']));
$pass = mysqli_real_escape_string($connect, htmlspecialchars($_POST['pass']));
$cpass = mysqli_real_escape_string($connect, htmlspecialchars($_POST['cpass']));
$add = mysqli_real_escape_string($connect,htmlspecialchars($_POST['add']));
$image = $_FILES['image']['name'];
$role = mysqli_real_escape_string($connect,htmlspecialchars($_POST['role']));

// Validate required fields
if (empty($name) || empty($mobile) || empty($pass) || empty($cpass) || empty($add) || empty($image) || empty($role)) {
    echo '<script>alert("All fields are required."); window.location = "../routes/register.php";</script>';
    exit;
}

// Validate password match
if ($cpass != $pass) {
    echo '<script>alert("Passwords do not match."); window.location = "../routes/register.php";</script>';
    exit;
}

// Perform file type validation for image upload
$allowedExtensions = ['jpg', 'jpeg', 'png'];
$fileExtension = strtolower(pathinfo($image, PATHINFO_EXTENSION));

if (!in_array($fileExtension, $allowedExtensions)) {
    echo '<script>alert("Invalid file type. Only JPG, JPEG, and PNG files are allowed."); window.location = "../routes/register.php";</script>';
    exit;
}

// Perform additional server-side validation, e.g., validate mobile number format, password complexity, etc.

// Move the uploaded file to a secure location
$uploadDir = '../uploads/';
$targetFile = $uploadDir . basename($image);

if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
    // Insert the sanitized data into the database
    $insert = mysqli_query($connect, "INSERT INTO user (name, mobile, password, address, photo, status, votes, role) VALUES ('$name', '$mobile', '$pass', '$add', '$image', 0, 0, '$role')");

    if ($insert) {
        $encodedName = htmlspecialchars($name, ENT_QUOTES);
        // To enhance the protection against script attacks, we can use the htmlspecialchars 
        // function with the ENT_QUOTES flag when displaying the data back to the user. 
        // This will ensure that any special characters are properly encoded.
        echo '<script>alert("Registration successful! Welcome, ' . $encodedName . '"); window.location = "../";</script>';
        exit;
    } else {
        echo '<script>alert("Error occurred during registration."); window.location = "../routes/register.php";</script>';
        exit;
    }
} else {
    echo '<script>alert("Error occurred while uploading the image."); window.location = "../routes/register.php";</script>';
    exit;
}
?>
