<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require('mysqli_connect.php');

        $errors = array(); //Intialize an array that will store error messages for the user
        
        if(empty($_POST["user_bio"])){
            $errors[] = "You did not enter your bio";
        }else{
            $bio = mysqli_real_escape_string($dbc, $_POST['user_bio']);
            if(empty($errors)){
                $query = "INSERT INTO user_info (bio) VALUES('$bio')";
                $run = mysqli_query($dbc, $query);
                if($run){
                    echo "<h1> Bio data is successfully inserted to the user_bio table</h1>";
                }
                else{
                    echo "<h1> Bio data is not inserted</h2>";
                    echo "<p>".mysqli_error($dbc)."</p>";
                    mysqli_close($dbc); //Close the db connection
                    exit(); //Terminate the execution of the script
                }
            } else{
                echo "<h2>Error!</h2>";
                echo "<p>The following error(s) have occured:<br />";
                foreach ($errors as $error){
                    echo " - $error <br />";
                }
                echo "Please try again.</p>";
            }
        }
        mysqli_close($dbc);//Close the db connection

    }
?>