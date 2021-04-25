<?php
session_start(); //here it stores random PHPSESSId in browser
$_SESSION['loggedIn']=true;
if(isset($_POST['remmember']) && $_POST['remmember']==true){
    setcookie('remember', true , time() + (360*24*60*60));
}
header('location:index.php');
?>