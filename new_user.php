<?php 
    include('header.php');
    require('mysqli_connect.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $errors=array();
        if(empty($_POST['first_name'])){
            $errors[]="You forgot to enter your first name";
        }else{
            $fn = $_POST['first_name'];
        }

        if(empty($_POST['last_name'])){
            $errors[] = "You forgot to enter your last name.";
        }else{
            $ln = $_POST['last_name'];
        }

        if(empty($_POST['email'])){
            $errors[]="You forgot to enter your email";
        }else{
            $e = $_POST['email'];
        }

        if(empty($_POST['pass'])){
            $errors[]="You forgot to enter your password";
        }else{
            $p = $_POST['pass'];
        }

        if(empty($_POST['bday'])){
            $errors[]="You forgot to enter your birthday";
        }else{
            $bday = $_POST['bday'];
        }

        if(empty($_POST['sex'])){
            $errors[]="You forgot to pick a gender";
        }else{
            $gender = $_POST['sex'];
        }

        if(empty($errors)){
            $query = "INSERT INTO users (first_name,last_name,email, password,birthday,gender) VALUES('$fn','$ln','$e',SHA1('$p'), '$bday','$gender')";
    
            $run = mysqli_query($dbc,$query);
    		if($run){
                echo "<h1>Thank you! </h1>You are now registered";
            }else{
                echo "<h1>System Error</h1> You could not be registered due to an error.";
                echo "<p>".mysqli_error($dbc)."</p>";
            }
        }else{
            echo "<h1>Errors!</h1>";
            foreach($errors as $error){
                echo " - $error <br>";
            }
            echo "Please try again!";
        }
    
        mysqli_close($dbc);
    }
    include('footer.php');
?>
