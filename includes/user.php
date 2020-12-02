<html>
<head>
<title> Contact form</title>
<link type="text/css" rel="stylesheet" href="/includes/usercss.css" />  
<link type="text/css" rel="stylesheet" href="/includes/core.css"/>
<style>
/* Full-width inputs */
input[type=email], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}
/* Add padding to containers */
.container {
    padding: 16px;
}


footer{
	text-align:center;
	font-family:cursive;
	font-size:10px;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
	align:center;
}

</style>
</head>
<body>
<?php 

 include "header.php";


if(isset($_POST['submit']))
{
$email=$_POST['email'];
$pass=$_POST['pass'];

	include "conn.php";
	$sql = mysqli_query($conn,"select * from register where email='$email' and pass='$pass'");
$row=mysqli_fetch_assoc($sql);
if($pass==$row['pass'])
{
	$remember=$_POST['remember'];
	if(isset($_POST['remember'])){
	setcookie('email',$email,time()+60*60*7);
	setcookie('pass',$pass,time()+60*60*7);
	}
	session_start();
	$_SESSION['mail']=$email;

	
	header("location:/project/includes/userreq.php");
	
}
else
{
	echo '<script>alert("plz enter valid password");</script>';
}

	
}
?>



<div class="contact-form">
<br><br><br><br><br><br>

<form id="contact-form" method="post" >
<center>
<div class="container">
    <label for="email"><b>Email-Id</b></label>
    <input type="email" placeholder="Enter Email-Id" id=email name="email" required>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password"  id=pass" name="pass" required>

  </div>
<button type="submit" name="submit">Login</button><br>
     <label><br>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
</form>
<br>
<a href="/project/includes/registration.php"><i>Create account</i><a><br>
<a href="/project/includes/forgotpassword.php"><i>forgot password ?</i></a>
</center>
</div> 
<?php 
if(isset($_COOKIES['email']) and isset($_COOKIES['pass']))
{
	$email=$_COOKIES['email'];
	$pass=$_COOKIES['pass'];
	echo "<script>
	document.getElementById('email').value='$email';
	document.getElementById('pass').value='$pass';
	</script>";
}
?>
<br>
<br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
<footer style=color:black;>
Developed by aadtiya<br>
@copywight by aditya</footer>

</html>

