<?php
session_start();
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $email = mysqli_real_escape_string($connect,$_POST['email']);

    $emailquery = "SELECT * FROM user WHERE email='$email'";
    $query = mysqli_query($connect, $emailquery);

    $emailcount = mysqli_num_rows($query);
    


    if($emailcount){
        $userdata = mysqli_fetch_array($query);
        // var_dump($userdata); checking if data is fetched
        $name = $userdata['name'];
        $token = $userdata['token'];

        $body = "http://localhost/voting_system/routes/reset_password.php?token=$token";

        require_once '../vendor/autoload.php';

        // Create the Transport
        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587,'tls'))
          ->setUsername('dhakaladdy00@gmail.com')
          ->setPassword('mhfmpwllcylsgdvw')
        ;
        
        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
        
        // Create a message
        $message = (new Swift_Message('Reset Password'))
          ->setFrom(['dhakaladdy00@gmail.com' => 'OVS'])
          ->setTo([$email => $name])
          ->setBody('Dear'. $name.',Click here to reset your password! '.$body.'  Best regards,The Online Voting System Team')
          ;
        
        // Send the message
        $result = $mailer->send($message);

        if($result){
            $_SESSION['msg'] = "Check your mail to reset your password $email";
            header('location:../index.php');
        } else {
            echo '<script>
            alert("Failed to send email");
            window.location = "../index.php";
            </script>';
        }
    } else {
        echo '<script>
            alert("No such email");
            </script>';
    }
}
?>
