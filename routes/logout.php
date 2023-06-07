<!--  This PHP code starts a session, destroys the current session data, and redirects the user to the
parent directory of the current page. This is commonly used to log out a user and clear their
session data.  -->
<?php
    session_start();
    session_destroy();
    header("location: ../");
?>