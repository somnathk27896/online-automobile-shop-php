<?php
	session_start();
?>



<html>
<head>
<title>BhaiAdminLoginKar </title>
<style type="text/css">

body{background-image:url(logo/mito002.jpg);
background:no-repeat;
}
.login{
width:400px;
height:250px;
background-color: rgba(0,0,0,0.5);
margin:0 auto;
margin-top:40px;
padding-top:10px;
padding-left:50px;
border-redius:15px;
color:#FFFFFF;
font-weight:bolder;
opacity:.8

}
.login input[type="text"]{
width:200px;
height:35px;
border:0;
border-radius:5px;
padding-left:5px;
 }

.login input[type="password"]{
width:200px;
height:35px;
border:0;
border-radius:5px;
padding-left:5px;
}
.login input[type="submit"]{
width:100px;
height:35px;
border:0;
border-radius=5px;
font-weight:bolder;}

</style>
</head>

<body>
<br>
<center>
<h1>Admin Login</h1>
</center>
<div class="login">
<br><br><br>
<form name="form1" action="" method="post">

NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name = "name" placeholder="Admin Nam Dal Na Bhaai" required/><br><br>
PASSWORD:&nbsp;&nbsp;&nbsp;<input type="password" name="pass" placeholder="Password Is Must Bhau.." required/><br><br>
<center><input type="submit" name="submit"  value="login"/></center>

</form>
</div>
<?php

if(isset($_POST["submit"]))
{
$con= mysqli_connect("localhost","root","");
mysqli_select_db($con,"automobile");

$res= mysqli_query($con,"select * from admin where name='$_POST[name]' && pass='$_POST[pass]'");
if($row=mysqli_fetch_array($res))
{
$_SESSION["name"]=$row["name"];
?>
<script type="text/javascript">
window.location="index.php";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert("SOMETHING IS WRONG BRO.....!");

</script>		
<?php
}
}

?>


</body>
</html>
