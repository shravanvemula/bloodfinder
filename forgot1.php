
<?php
echo'
<html>
<head>
  
  <title>Blood Finder</title>

  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  
 <style>
.log
{
    padding-top:250px;
    padding-bottom:250px;
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
  <li style="border-left: medium none;"><a href="index.php">Home</a></li>
 
  
  
  <li><a href="login1.php">Login</a></li>
  <li><a href="reg.php">Register</a></li>
  <li><a href="help.php">Help</a></li>
  </ul>
</div>
</div>
<div class="content">
<img src="images/copyright.gif" class="copyright" alt="Shravan and Group"></a>
<div class="content-in">
<div class="left-panel">
<h2> </h2>
<div class="left-content">
<ul>
  <li><a href="donor.php" class="fa fa-search">&nbsp &nbsp Find a Donor?</a></li>
  <br><br>
 
  <br><br>
  <li><a href="reg.php"class="fa fa-handshake">&nbsp &nbsp Want to be a Donor?</a></li>
  <br><br>
   <br><br>

  <li><a href="search.php"class="fa fa-book">&nbspSearch by location</a></li>
   <br><br>
 
  
</ul>
</div>
<div class="gap"></div>
<h2>Recent Updates</h2>
<div  class="left-content">
<ol>
  <li><a href="http://www.thehealthsite.com/news/naga-students-initiate-blood-donation-camp-for-unprivileged-patients-ag0618/">Naga students initiate blood-donation camp for unprivileged patients.</a></li>
  <li><a href="http://www.india.com/news/india/kerala-temple-asks-devotees-to-donate-blood-for-abhishek-during-celebration-of-annual-festival-2930746/">Kerala: Temple Asks Devotees to Donate Blood For During Celebration of Annual Festival</a></li>
  <li><a href="http://www.thehealthsite.com/news/6-million-people-in-india-signed-up-as-blood-donors-on-facebook-ag0118/">6 million people in India signed up as blood donors on Facebook</a></li>
 </ol>
</div>
</div>
<div class="right-panel">
<div class="right-panel-in">
<div class="row">
<div align="center">

<h2 class="title">You can find blood donors here at the required location</h2>
<div class ="log">
<div >
';

     
  require 'connect.inc.php';

if(isset($_POST['password']))
{
  $password=$_POST['password'];
  $MOBILE=$_POST['MOBILE'];
  
 

  
  if(!empty($password))
  {
    $hashpwd=password_hash($_POST['password'],PASSWORD_BCRYPT);
     
     $query = "update register  set password='".$hashpwd."' where MOBILE='".$MOBILE."'";
     
  

 $result = $conn->query($query);

       
        if($result)
             echo '<h1>Password changed Successfully</h1>';
        else echo 'Insertion Failed';


 
    
    
     

}
}
  


        
echo'

</div>
</div>
<div class="footer">

<ul>
   <p align="center"><strong>Designed by Shravan,Vinutha,Saikiran</strong></p>
  
</ul>
</div>
</div>
</div>

</body></html>';
?>