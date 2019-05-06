<?php
    require('mysqli_connect.php');

    $query = $_GET['query'];

    $min_length = 3;

    if(strlen($query) >= $min_length){
        $query = htmlspecialchars($query); 
        $query = mysqli_real_escape_string($query);

        $result = mysql_query("SELECT * FROM articles
        WHERE (`first_name` LIKE '%".$query."%') OR (`last_name` LIKE '%".$query."%')") or die(mysql_error());
        if(mysql_num_rows($raw_results) > 0){ 
             
            while($results = mysql_fetch_array($raw_results)){
             
                echo "<p><h3>".$results['first_name']."</h3>".$results['last_name']."</p>";
            }
             
        }
        else{
            echo "No results";
        }
    }
?>