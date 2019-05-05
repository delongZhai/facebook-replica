<?php 
    include('header.php');
    require('mysqli_connect.php');

    if(isset($_POST['user'])){

        $uname=$_POST['user'];
        $password=$_POST['pass'];

        $sql= "SELECT email, password FROM users WHERE email='".$uname."' AND password='".SHA1($password)."' limit 1";

        $run = mysqli_query($dbc, $sql);
        if(mysqli_num_rows($run)==1){
            $info= "SELECT first_name,last_name FROM users WHERE email='".$uname."' AND password='".SHA1($password)."' limit 1";
            $inforun = mysqli_query($dbc, $info);
            $num = mysqli_num_rows($inforun);

            while ($row = mysqli_fetch_array($inforun, MYSQLI_ASSOC)){ 
                echo "<h1> Welcome ".$row['first_name']." " .$row['last_name']. " to your Facebook page. </h1>";
            }
            exit();
        }
        else{
            echo "Incorrect username or password. Try again";
            exit();
        }
    }
    mysqli_close($dbc);
    
    include('footer.php');
?>
    