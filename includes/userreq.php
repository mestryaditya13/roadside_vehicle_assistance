<html>
<head><title>Request Page</title>
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
footer{
		text-align:center;
		font-size:10px;
		font-family:cursive;
	}

input[type=email], input[type=tel], input[type=text],textarea,select {
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


</style>
</head>
<body>
<?php
session_start(); 

 include "header.php";
echo "Welcome ".$_SESSION['mail'];
if(isset($_POST['submit']))
{
	include "conn.php";
	$name=$_POST['txtuser'];
	$no=$_POST['txtno'];
	$add=$_POST['txtadd'];
	$problem=$_POST['issue'];
	$email=$_POST['txtemail'];
	//$email_from="$email";
	$email_subject="User Request";
	
	$email_body="User Name:$name<br>"."User Email:$email<br>"."User Request:$problem<br>"."Address:$add<br>";
	
	$to="mestryaditya14@gmail.com";
	
	//$headers="From: $email_from \r\n";
	//$headers.="Replt-to: $email	\r\n";
	
	if(mail($to,$email_subject,$email_body))
	{
		echo "<h1 align='center'><font color='#00800'> Your messsage has been successfully sent to $to</font></h1>";
	}
	else
	{
		echo "<h1 align='center'><font color='#00800'> Message Unsuccesful!!!</font></h1>";
	}
}


?>

<center>
<h1>User Request</h1><br><br>
<form id="f" action="#" method="post">
<table height=300px; width=400px;>
<tr>
<td><b>Enter Your Name:</b></td>
<td><input type="text" name="txtuser" placeholder="name" required></td>
</tr>

<tr>
<td><b>Enter Your Contact No:</b></td><td><input type="tel" name="txtno" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="767-806-2902" required></td>

</tr>

<tr>
<td><b>Enter Your Email-ID:</b></td>
<td><input type="email" name="txtemail" placeholder="abc@gmail.com"  value="<?php echo $_SESSION['mail']; ?>"required></td>

</tr>

<tr>
<td><b>Current Location:</b></td>
<td><textarea name="txtadd" rows="5" cols="20" placeholder="borivali" required></textarea></td>
</tr>
<tr><td><b>Select Your Issue:</b></td>
<td><select name="issue">
	<option value="1"> OnSite Assitance</option>
	<option value="2">Flat Tyre Problem</option>
	<option value="3">Towing</option>
	<option value="4"> Dead Battery</option>
	<option value="5">Key Lost or Locked</option>
	<option value="6">  Fuel</option>
</select></td></tr>
</table>
<button type="submit" name="submit">Submit</button>
Click Here to<a href="/project/includes/logout.php"> Logout</a>
</form>
</center>
</body>
<footer style=color:black;>
Developed by adtiya<br>
@copywight by aditya</footer>
</html>