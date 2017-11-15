<?php 
$password = "123456";
if ($_POST['password'] != $password) { 
?>
<h2>Logueate</h2>
<form name="form" method="post" action="">
<input type="password" name="password"><br>
<input type="submit" value="Login"></form>
<?php 
}else{
?>
Contenido protegido
<?php 
} 
?>