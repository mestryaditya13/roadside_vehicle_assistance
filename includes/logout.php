<html>
<head>
</head> 
<body>
<?php
include "header.php";  
session_start();
session_destroy();
if(isset($_COOKIES['email']) and isset($_COOKIES['pass']))
{
	$email=$_COOKIES['email'];
	$pass=$_COOKIES['pass'];

setcookie('email',$email,time()-1);
	setcookie('pass',$pass,time()-1);
}
echo "<br><br><br><p style=text-align:center;>You successfully LogoutClick <a href='/project/includes/user.php'>here</a> to login again</p>";

?>
</body>
</html>