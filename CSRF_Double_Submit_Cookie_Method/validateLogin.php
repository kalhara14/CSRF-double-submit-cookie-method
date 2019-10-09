<?php
    require 'csrf.php';
    if(isset($_POST['Login']))
    {
        if(!empty($_POST['username']) && !empty($_POST['password']))
        {
            $un = $_POST['username'];
            $pw = $_POST['password'];

            if($un == "admin" && $pw == "password")
            {
                
                session_start();
                csrf::generateToken1(session_id());
                echo '<h3>Successfully logged in</h3>';
                header('location: updateInfo.php');
            }
            else
            {
                echo '<h3>login failed</h3>';
		        header('location: login.php');
            }
        }
    }
?>