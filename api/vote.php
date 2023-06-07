<!-- This is a PHP script that updates the vote count of a candidate and marks the user as having voted.
It takes in the number of votes (``), the ID of the candidate (``), and the ID of the user
who is voting (``) through a POST request. It then updates the vote count of the candidate in
the database and marks the user as having voted. If the update is successful, it retrieves the
updated data for all candidates and stores it in the user's session. Finally, it displays a success
or failure message and redirects the user to the dashboard. -->
<?php
    session_start();
    include("connection.php");

    $votes = $_POST['gvotes'];//  ['gvotes']-> votes of who is getting vote
    $total_votes= $votes+1;
    $gid = $_POST['gid'];// ['gid']-> id of who is getting vote
    $uid = $_SESSION['id']; //['id']-> id of who gave vote

    $update_votes = mysqli_query($connect, "update user set votes='$total_votes' where id='$gid'");//this will increase votes of the candidate
    $update_status = mysqli_query($connect, "update user set status=1 where id='$uid'");//this says user has voted

    if($update_status and $update_votes)//to show the updated data to the dashboard
    {
        $getGroups = mysqli_query($connect, "select name, photo, votes, id from user where role=2 ");
        $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
//Also update the user data in session so that the next time the user login will see the updated data on dashboard
        $_SESSION['groups'] = $groups;
        $_SESSION['status'] = 1;
        echo '<script>
                    alert("Voting successfull!");
                    window.location = "../routes/dashboard.php";
                </script>';
    }
    else{
        echo '<script>
                    alert("Voting failed!.. Try again.");
                    window.location = "../routes/dashboard.php";
                </script>';
    }
    
?>