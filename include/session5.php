<?php 
include "common.php";
// include "form_functions.php";
echo "
<center>
<form action='form_functions.php' method='post' style='color:red;padding:20px'>
name : <input name='name'>
<br>
score : <input name='score' > 
<br>
email : <input name='email' > 
<br>
<button type='submit'>submit</button>
<br>
</form>
</center>
";


echo "
<center>
<form action='session5.php' method='get' style='color:red;padding:20px'>
email : <input name='email' > 
<br>
<button type='submit'>submit</button>
<br>
</form>
</center>
";
?>