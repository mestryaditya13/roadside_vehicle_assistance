<html>
<head>
<title>Registration page</title>
<link type="text/css" rel="stylesheet" href="reg.css" />
<style>
/* Full-width inputs */
input[type=email],input[type=text],input[type=tel], input[type=password] {  
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

$servername = "localhost";
$username = "root";

$db="user";

// Create connection
$conn = new mysqli("$servername", "$username", "", "$db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
$lname=$_POST['lname'];
$city=$_POST['city'];
$phno=$_POST['phno'];
$email=$_POST['email'];
$pass=$_POST['psw'];
$error1="";
$error2="";
$reppass=$_POST['psw-repeat'];


if($pass==$reppass)
{
	//include "conn.php";
$sql = "INSERT INTO register VALUES ('$fname', '$lname','$city','$phno','$email','$pass')";

$cmd1=mysqli_query($conn,$sql);

if ($cmd1) {
	echo '<script>alert("Registration successfull")</script>';
header("location:/project/includes/user.php");
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else
{	
echo "Password should be same";
}
}	
?>

<form action="#" method="post">
  <div class="container">
  <center>
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
   <hr>
	<table>
	<tr>
	<td><label for="fname">  <b>First Name</b></label></td>
    <td><input type="text" placeholder="Enter First Name" name="fname" required></td>
	</tr>
	
	<tr>
	<td><label for="lname">  <b>Last Name</b></label></td>
   <td> <input type="text" placeholder="Enter Last Name name" name="lname" required></td>
	</tr>
	
	
	<tr>
	<td><label for="city">  <b>City</b></label></td>
   <td> <input type="text" placeholder="Enter City" name="city" required></td>
	</tr>
	
	<tr>
	<td><label for="phno">  <b>Phone Number</b></label></td>
	<td><input type="tel" placeholder="Enter Mobile Number"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phno" required></td>
		</tr>
	
	<tr>
    <td><label for="email">  <b>Email</b></label></td>
    <td><input type="email" placeholder="Enter Email" name="email" required></td>
	
	</tr>
	
	<tr>
    <td><label for="psw"><b>Password</b></label></td>
   <td colspan=2> <input type="password" placeholder="Enter Password" name="psw" required></td>
	</tr>
	
	<tr>
    <td><label for="psw-repeat"><b>Repeat Password</b></label></td>
    <td colspan=2><input type="password" placeholder="Repeat Password" name="psw-repeat" required></td>
   
</tr>
<tr><td>    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <br>
	</table>
  <button type="submit" name="submit">Register</button>
  </div>
<hr>
  
</form>
</body><br><br>
<footer style=color:black;>
Developed by aadtiya<br>
@copywight by aditya</footer>
</html>