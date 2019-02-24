<?php

	if (isset($_POST["submit"])){

    $error = "";

    if (!$_POST["username"]){

        $error.="<br />Please enter your email";

    }

    if (!$_POST["password"]){

        $error.="<br />Please enter your password";

    }
    
    $flag = 0;

    if($error!="") {

        $result='<div class="alert alert-danger"><b>There were error(s) in your form:</b>'.$error.'</div>';

    } else {
        $flag = 1;
        $result='<div class="alert alert-success"><b>Thank you for Singing In</b></div>';

    }
    echo $result;

    if($flag){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "shravan";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $db);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        echo "Connected successfully";

        $query = "INSERT INTO `login` (`username`, `password`) VALUES('".$_POST['username']."','".$_POST['password']."') ";
        $result = $conn->query($query);

       
        if($result)
             echo 'Inserted Successfully';
        else echo 'Insertion Failed';

    }


}
	

?>




<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

    <form action="login.php" method="POST">
        
        <label>Enter Username</label>
        <input type="text" name="username" required="">

        <label>Enter Password</label>
        <input type="password" name="password" required="">

        <input type="submit" name="submit">


    </form>

</body>
</html>