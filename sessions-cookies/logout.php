<?php
session_start();
session_destroy();
setcookie('remember',false);
header('location:index.php');
?>