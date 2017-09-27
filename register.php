


<html>
<head>
<title> Registration Form </title>
<link href="style.css" rel="stylesheet">

</head>
<Center>
<h1 size="3">Registration Form</h1>
</center>

<form name="signup" action="" method="post">

<fieldset>
<legend>Personal Information</legend>
<pre>
First name 				<input type="text" name="fname" required pattern="^[A-Za-z]+"><br>
Last Name 				<input type="text" name="lname" required><br>
Date Of Birth 				<input type="date" name="dob" required><br>
Gender 					<input type="radio" name="gender" value="male" checked>Male <input type="radio" name="gender" value="female">Female <input type="radio" name="gender">Other 
</fieldset>
</pre>
<fieldset>
<legend>Contact Information</legend>
<pre>
Address			 		<textarea name="addr" rows="3" cols="50" required></textarea><br>
Email ID 				<input type="text" name="email" required><br>
Mobile Number 				<input type="text" name="num" required pattern="^[0-9]+"><br>
Telephone Number 			<input type="text" name="tel"><br>
</pre>


</fieldset>

<fieldset>
<legend>Login Details</legend>
<pre>
User Name 				<input type="text" name="username" required><br>
Password 				<input type="password" name="pass" required><br>

</fieldset>
<center><input type="submit" value="SUBMIT" name="reg">

</pre>

</form>




<?php
if(isset($_POST["reg"]))
{
$con= mysqli_connect("localhost","root","");
mysqli_select_db($con,"automobile");


$res=mysqli_query($con, "select * from signup where username='$_POST[username]'");
if(mysqli_num_rows($res))
{
?>
<script type="text/javascript">
alert("USERNAME ALREADY EXIST");
</script>
<?php

}
else
{
mysqli_query($con, "insert into signup values('','$_POST[fname]','$_POST[lname]','$_POST[dob]','$_POST[gender]','$_POST[addr]','$_POST[email]','$_POST[num]','$_POST[tel]','$_POST[username]','$_POST[pass]')");
?>
<script type="text/javascript">
alert("RECORD INSERTED SUCCESSFULLY");
window.location="login.php";

</script>		
<?php
}
}

?>
</body>
</html>