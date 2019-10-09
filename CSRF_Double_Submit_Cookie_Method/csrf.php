<?php 
    class csrf{
        var $token;
        var $session_id1;

        //create token and store it 
        public function generateToken1($id){
            //Generate a random string.
            $token = openssl_random_pseudo_bytes(16);
 
            //Convert the binary data into hexadecimal representation.
            $token = bin2hex(base64_encode($token));

            //assign session id
            $session_id1 = $id;

             //open file pointer for writing 
             $myfile = fopen("Tokens.txt", "w") or die("Unable to open file!");
             $_SESSION['csrf_token'] = $token;
             
             //prepare content to be written
             $txt1 = $session_id1."\n";

             //write cookie values to the file
             fwrite($myfile,$txt1);
 
             //set the session_id and csrf token in  cookies for 1 hour
             
             setcookie("SessionID",$session_id1,time()+(60*30),'/');

             setcookie("csrf",$token,time()+(60*30),'/');
            //change cookie value

             fclose($myfile);
        }

        //validate token
        public function validateToken($id,$TOKEN,$csrf_token)
        {
            $myfile = fopen("Tokens.txt", "r") or die("Unable to open file!");
            $session_id1 = fgets($myfile);
            
            fclose($myfile);
            //creating hashes to compare
            $csrf_token = crypt($csrf_token,"hash");
            $session_id1 = crypt($session_id1,"hash");
            $TOKEN = crypt($TOKEN,"hash");
            $id = crypt($id,"hash");

            //comparing hashes
            if(hash_equals($csrf_token,$TOKEN))
            {
                if(hash_equals($session_id1,$id))
                {
                    echo "tokens matches<br>";
                    return 0;
                }
                else{
                    echo "tokens does not match1<br>";
                    return -1;
                }
            }
            else{
                echo "tokens does not match2<br>";
                return -1;
            }

        }

        

       
    }
    
?>