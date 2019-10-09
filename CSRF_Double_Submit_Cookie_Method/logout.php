<?php
session_start();

    session_destroy();
    

		setcookie("SessionID","",time()-36000,"/");
        setcookie("csrf","",time()-36000,"/");
        
        $myfile = fopen("Tokens.txt", "w") or die("Unable to open file!");
        $txt1 = "\n";
        fwrite($myfile,$txt1);
        fclose($myfile);
	header("Location:login.php");


?>