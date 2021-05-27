<?php      
    include('conexion.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
    
    $sql = "select usuario, contrasena from Empleado where usuario = '$username' and contrasena = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
        
    if($count == 1){  
        header('Location: ../main.php');
    }  
    else{  
        echo "<h1>Usuario o contraseña incorrectos</h1>";  
    }     
?>  
