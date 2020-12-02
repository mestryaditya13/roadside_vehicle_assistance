<html>
<head><title>ForgotPassword</title> 
<style>
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none; 
    cursor: pointer;
    width: 20%;
	align:center;
}
input[type=email], input[type=password] {
    width: 100%;
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



footer{
	font-family:cursive;
	text-align:center;
	font-size:10px;
}
</style>
</head>
<body>
<?php 
include "header.php";
include "conn.php";
if(isset($_POST['update']))
{
	$email=$_POST['email'];
	$newpass=$_POST['newpass'];
	$reppass=$_POST['confpass'];


if($newpass==$reppass)
{
$sql="update register set pass='$newpass' where email='$email'";
	if(mysqli_query($conn,$sql));	
			header("location:/project/includes/user.php");
}

else
{
	echo "password should be same";
}
}
 ?>
<div align="center">

<form id="forgot-password" method="post">
<table><br><br>
<h2>ForgotPassword</h2>
<tr><td><b>Emailid:</b></td><td><input name="email" type="email" value="" placeholder="Emaild" required></td></tr><br>
<tr><td><b>NewPassword:</b></td><td><input name="newpass" type="password" value="" placeholder="newPassword" required></td></tr><br>
<tr><td><b>ConfirmPassword:</b></td><td><input name="confpass" type="password" value="" placeholder="confirmPassword" required></td></tr><br><br>

</table>
<button type="submit" name="update">Update</button>


</form>


</div>
</body><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer style=color:black;>
Developed by aadtiya<br>
@copywight by aditya</footer>

</html>