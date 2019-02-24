<?php

  if (isset($_POST["submit"])){

    $error = "";

    if (!$_POST["FIRSTNAME"]){

        $error.="<br />Please enter your Firstname";

    }

    if (!$_POST["DD"]){

        $error.="<br />Please enter your DAY";

    }
    if (!$_POST["MM"]){

        $error.="<br />Please enter your MONTH";

    }
     if (!$_POST["YYYY"]){

        $error.="<br />Please enter your YEAR";

    }
    if (!$_POST["YYYY"]){

        $error.="<br />Please enter your YEAR";

    }
    if (!$_POST["MALE"]){

        $error.="<br />Please enter your Gender";

    }
    if (!$_POST["MOBILE"]){

        $error.="<br />Please enter your Mobile";

    }
    if (!$_POST["EMAIL"]){

        $error.="<br />Please enter your Email";

    }
    if (!$_POST["CON"]){

        $error.="<br />Please enter your country ";

    }
    if (!$_POST["DIS"]){

        $error.="<br />Please enter your distirct ";

    }
    if (!$_POST["CIT"]){

        $error.="<br />Please enter your city ";

    }
    if (!$_POST["AGE"]){

        $error.="<br />Please enter your age";

    }
    if (!$_POST["password"]){

        $error.="<br />Please enter your password";

    }

    
     $flag = 0;

    if($error!="") {

        $result='<div class="alert alert-danger"><b>There were error(s) in your form:</b>'.$error.'</div>';

    } else {
        $flag = 1;
        $result='<div class="alert alert-success"><h3>Thank you for Signing In</h3></div>';

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
        $hashpwd=password_hash($_POST['password'],PASSWORD_BCRYPT);

        $query = "INSERT INTO `register` (`FIRSTNAME`, `xyz`,`DD`,`MM`,`YYYY`,`MALE`,`MOBILE`,`EMAIL`,`CON`,`DIS`,`CIT`,`AGE`,`password`) VALUES('".$_POST['FIRSTNAME']."','".$_POST['xyz']."','".$_POST['DD']."','".$_POST['MM']."','".$_POST['YYYY']."','".$_POST['MALE']."','".$_POST['MOBILE']."','".$_POST['EMAIL']."','".$_POST['CON']."','".$_POST['DIS']."','".$_POST['CIT']."','".$_POST['AGE']."','".$hashpwd."') ";
        $result = $conn->query($query);

       
        if($result)
             echo '<h4>Registered Successfully</h4>';
        else echo 'Insertion Failed';

    }


}
  

?>







<!DOCTYPE html>
<html>
<head>
  
  <title>Blood Finder</title>

  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  
 <style>
form
{
background-color:#000000;
height:100%;
width:100%;
}
</style>
  


</head>
<body>
<div class="main">
<div class="page">
<div class="header">
<div class="banner">


</div>
<div class="topmenu">
<ul>
  
 
  
  
  <li><a href="login1.php">Login</a></li>
  <li><a href="reg.php">Register</a></li>
  <li><a href="help.php">Help</a></li>
  
</ul>
</div>
</div>
<div class="content">
<img src="images/copyright.gif" class="copyright" alt="Shravan and Group"></a>
<div class="content-in">


<div class="row">
<div align="center">

<h2 class="title">Register Form</h2>
<!-- NAMES-->
<form action="reg.php" method="POST">
<br>
FName:<INPUT TYPE="TEXT" name="FIRSTNAME" placeholder="FIRSTNAME" id="name">
<BR><BR>
<br><br>
Blood Group:
 <select name="xyz">
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="A1+">A1+</option>
  <option value="A1-">A1-</option>
  <option value="A1B+">A1B+</option>
  <option value="A1B-">A1B-</option>
  <option value="A2+">A2+</option>
  <option value="A2B-">A2B+</option>
  <option value="A2B-">A2B-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="Bombay Blood Group">Bombay Blood Group</option>
  <option value="O+">O+</option>
   <option value="O-">O-</option>
  
  
</select> 
<br><br>
<BR><BR>

<!-- DATE-OF-BIRTH-->
DATE:<INPUT TYPE="TEXT" name="DD" placeholder="DD" id="dd" size="1" >
MONTH:<INPUT TYPE="TEXT" name="MM" placeholder="MM" id="mm" size="1">
YEAR:<INPUT TYPE="TEXT" name="YYYY" placeholder="YYYY" id="yyyy" size="4">
<BR><BR>
<BR><BR>
<!-- GENDER-->
GENDER:&nbspMALE<INPUT TYPE="RADIO" name="MALE">&nbsp&nbspFEMALE<INPUT TYPE="RADIO" NAME="MALE">
<BR><BR>
<BR><BR>
<!-- PHONE NUMBER-->
MOBILENO:<INPUT TYPE="TEXT" NAME="MOBILE" placeholder="MOBILE NUMBER" SIZE="25" id="phone">
<BR><br>
<BR><BR>
<!-- E-MAIL-->
EMAIL:<INPUT TYPE="text" NAME="EMAIL" placeholder="EMAIL ADDRESS" SIZE="46" id="email">
<BR><br>
<BR><BR>
<!-- ADDRESS-->
Country<INPUT TYPE="TEXT" NAME="CON" placeholder="COUNTRY" >
<BR><br>
<BR><BR>
Distirct<INPUT TYPE="TEXT" NAME="DIS" placeholder="DISTIRCT" >
<br><br>
<BR><BR>
Area is<INPUT TYPE="TEXT" NAME="CIT" placeholder="AREA" >
<br><br>
<BR><BR>
AGE is:<INPUT TYPE="TEXT" NAME="AGE" id="age" >
<BR><br>
<BR><BR>

PASSWORD:<input type="password" name="password" placeholder="PASSWORD" id="password"><br><br><BR><BR>

<!-- SUBMIT-->
<input type="Submit" name="submit" value="submit"><BR><BR><BR><BR>
<!-- RESET-->

</div>
</form>
<div class="footer" >

<p align="center"><strong>Designed by Shravan,Vinutha,Saikiran</strong></p>
</div>
</div>
</div>
</div>
</div>



</body></html>