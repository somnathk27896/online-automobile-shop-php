<?php
	session_start();
if($_SESSION["username"]=="")
{
?>
<script type="text/javascript">
window.location="login.php";
</script>
<?php
}
?>

<html>
<head>

<style type="text/css">

body{background-image:;
background-size: cover;}
.order{
width:300px;
height:550px;
background-color: rgba(0,0,0,0.5);
margin:0 auto;
margin-top:40px;
padding-top:10px;
padding-left:50px;
border-redius:15px;
color:#FFFFFF;
font-weight:bolder;
opacity:.8;

}
.order input[type="text"]{
width:250px;
height:35px;
border:0;
border-radius:5px;
padding-left:5px;
 }
 .order textarea{
 width:250px;
 height:50px;
 }

.order input[type="password"]{
width:250px;
height:35px;
border:0;
border-radius:5px;
padding-left:5px;
}
.order input[type="submit"]{
width:100px;
height:35px;
border:0;
border-radius=5px;
font-weight:bolder;}

</style>


</head>
<body>
<div class="order">
<form action="" method="post">
<br>
Full Name:<br><input type="text" name="t1"><br><br>
ADDRESS:<br><input type="text" name="t2" required/><br><br>
CONTACT NO:<br><input type="text" name="t3" required pattern="^[0-9]+"/><br><br>
COUNTRY:<br><input type="text" name="t4">
<br><br>
STATE:<br><input type="text" name="t5" ><br><br>
Your Comments/Suggestions: <br>
<textarea name="t6" rows="3" cols="50" reqired></textarea>
<br><br>
<input type="submit" name="submit" value="Submit" /><br>
</form>
</div>
<?php
$link= mysqli_connect("localhost","root","");
mysqli_select_db($link,"automobile");
if(isset($_POST["submit"]))
{
mysqli_query($link,"insert into feedback values('','$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]')");


?>

<script type="text/javascript">
alert("Feed_back Successful");
window.location="home.php";
</script>

<?php

}
?>
</body>
</html>