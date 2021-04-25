<?php
session_start();  //this should be here to be able see $_SESSION['loggedIn']
if(isset($_SESSION['loggedIn'])||$_COOKIE['remember']==true){
?>
<a href="logout.php"><button >Logout</button></a>
<?php
}else{
?>

<html>
<center>
<form action="login.php" method="post"><br><br>
<input name="name" required placeholder="enter your name"><br><br>
<input name="name" required placeholder="enter password"><br><br>
<label >remmember me ?</label>
<input type="checkbox" name="remmember" value=1><br><br>
<input type="submit">
</form>
</center>
<?php 
}
?>
</html>