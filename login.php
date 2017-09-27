<?php
	session_start();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">

body{background-image:url(logo/mito002.jpg);
background:no-repeat;
}
.login{
width:300px;
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
<table>
<td>
<div class="login">
<h1>Login</h1>
<form action="" method="post">
<input type="text" placeholder="USERNAME PLEASE....." name="username" ><br><br>
<input type="password" placeholder="PASSWORD PLEASE....." name="pass"><br><br>
<input type="submit" value="SUBMIT" name="login" />
</form>
</div></td>
<td><img src="logo/1.jpg" width="522" height="460" /></td>

</table>

<?php

if(isset($_POST["login"]))
{
$con= mysqli_connect("localhost","root","");
mysqli_select_db($con,"automobile");

$res= mysqli_query($con,"select * from signup where username='$_POST[username]' && pass='$_POST[pass]'");
if($row=mysqli_fetch_array($res))
{
$_SESSION["username"]=$row["username"];
?>
<script type="text/javascript">
window.location="home.php";
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
