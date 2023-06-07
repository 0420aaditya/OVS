<!--  This is a PHP file that displays the dashboard of an online voting system. It starts a session and
checks if the user is logged in by checking if the 'id' session variable is set. If not, it
redirects the user to the login page. It then retrieves the user's data from the 'data' session
variable and sets the status variable based on the 'status' session variable.  -->
<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Online voting system - Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Custom CSS styles */
        #headerSection {
            margin-bottom: 20px;
        }
        #back-button {
            margin-right: 10px;
        }
        #logout-button {
            margin-left: 10px;
        }
        #mainSection {
            margin: 20px auto;
            max-width: 600px;
        }
        #profileSection {
            text-align: center;
            margin-bottom: 30px;
        }
        #groupSection {
            margin-top: 20px;
        }
        .group-item {
            border-bottom: 1px solid #bdc3c7;
            margin-bottom: 10px;
            padding: 10px;
        }
        .group-item img {
            float: right;
            height: 80px;
            width: 80px;
        }
        .vote-button {
            padding: 5px;
            font-size: 15px;
            border-radius: 5px;
        }
        .voted-button {
            background-color: #27ae60;
            color: white;
        }
        .vote-button:disabled {
            background-color: #3498db;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div id="headerSection" class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="../" class="btn btn-primary" id="back-button">Back</a>
                </div>
                <div>
                    <h1 class="text-center">Online Voting System</h1>
                </div>
                <div>
                    <a href="logout.php" class="btn btn-primary" id="logout-button">Logout</a>
                </div>
    </div>
<hr>

        <div id="mainSection">
                <div id="profileSection">
                    <center><img src="../uploads/<?php echo $data['photo']?>" class="rounded-circle" height="100" width="100"></center><br>
                    <b>Name: </b><?php echo $data['name'] ?><br><br>
                    <b>Mobile: </b><?php echo $data['mobile'] ?><br><br>
                    <b>Address: </b><?php echo $data['address'] ?><br><br>
                    <b>Status: </b><?php echo $status ?>
        </div>
    
        <div id="groupSection">
                <?php
                if(isset($_SESSION['groups'])){
                    $groups = $_SESSION['groups'];
                    for($i=0; $i<count($groups); $i++){
                ?>

                        <div class="group-item">
                            <img src="../uploads/<?php echo $groups[$i]['photo']?>" class="rounded-circle"> 
                            <b>Candidate Name: </b><?php echo $groups[$i]['name']?><br><br>
                            <b>Votes: </b><?php echo $groups[$i]['votes']?><br><br>
                            <form method="POST" action="../api/vote.php">
                                <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>"> 
                                <input type="hidden" name="gid" value="<?php echo $groups[$i]['id'] ?>">
                        <?php 
                        if($_SESSION['status']==1){
                        ?>
                                    <button disabled class="vote-button voted-button" type="button">Voted</button>
                                    <?php
                             }
                               
                                // else part removed during debugging

                                ?>
                            </form>
            </div>
                    <?php
                    }
                }
                else{
                    ?>
                    <div class="group-item">
                        <b>No Candidates available right now.</b>
                    </div>
                    <?php
                }  
                ?>
            </div>
        </div> 
    </div>

    <!-- Bootstrap JavaScript dependencies (jQuery and Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
