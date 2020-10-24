<?php
    // Major Task -  23rd October 2020

    //Slack Username - @veecthorpaul

    function generateUser(){

        //Names Array 
        $names = ['Victoria','Precious','John','Joshua','Martin'];
        
        

        //Loop across the array
        foreach ($names as $user) {

            //Checks if the name is lesser than 6
            if (strlen($user)<6){

                //Generate a 3-digit random number
                $ran3 = str_pad(rand(0,999),3,'0', STR_PAD_LEFT);

                //Concatenate the name to the randomly generated number
                $username = $user.$ran3;

                //Checks if the username is greater than 6 and not greater than 8
                if (strlen($username <=8 and strlen($username) > 6)){

                    //Declare header for password
                    $ranheader = ['def','jgi','xyc','ush','kai'];

                    //Generate another 3-digit number
                    $ran4 = str_pad(rand(0,999),3,'0', STR_PAD_LEFT);
                    //Generate a number between 0 and 4 to randomly select from the password headers
                    $i = mt_rand(0,4);

                    //Append and Prepend the password headers to the numbers
                    $password = $ranheader[$i].$ran4.$ranheader[$i];

                    //Echo Username and Password
                    echo 'Username:  <b>'.$username.'</b>
                    <br>'.'Password:  <b>'.$password.'</b>';
                    echo '<br><br>';

                }else{
                    echo 'Username must be greater than 6 and not greater than 8';
                };


            }else{
                echo 'Name should be lesser than 6<br>';
                continue;
            };
        };


    };

    //Call the function
    generateUser();

?>
