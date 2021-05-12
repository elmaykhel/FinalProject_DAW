<?php      
    $host = "labs.iam.cat";  
    $user = "a16miqboipos_mbp";  
    $password = "ausias";  
    $db_name = "a16miqboipos_fin";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  