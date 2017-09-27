<?php
	session_start();
if($_SESSION["name"]=="")
{
?>
<script type="text/javascript">
window.location="admin.php";
</script>
<?php
}
?>
<html>
<head><title></title></head>

<style>
</style>

<body>
<center>
<big><big><big><big>WELCOME</big></big></big></big><br />

<?php echo $_SESSION["name"]; ?><br>
<a href="index.php">INDEX</a>&nbsp;&nbsp;&nbsp;&nbsp;

<a href="logout.php">logout</a>
<br></center>


<form action="" method="post">

<fieldset>
	<legend><b>Add Employee</b></legend>
	<pre>
		Employee Username:&nbsp;<input type="text" name="euser"><br>
		Nmae:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ename">
		
		email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="eemail">
		
		contact:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="eno"><br>
		Address:	&nbsp;&nbsp;&nbsp;<input type="text" name="eaddr">
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="eadd">
	</pre>

</fieldset>
</form>
<?php
	if(isset($_POST["eadd"]))
	{
	$link=mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "automobile");
	$res=mysqli_query($link, "select * from employee where eusername='$_POST[euser]'");
	if(mysqli_num_rows($res))  			
	{									
?>										
	<script type="text/javascript">
	alert("Employee UsernamE ALREADY EXIST");
	</script>
<?php
	
	}
	else
	{
	mysqli_query($link, "insert into employee values('','$_POST[euser]','$_POST[ename]','$_POST[eemail]','$_POST[eno]','$_POST[eaddr]')");
?>
	<script type="text/javascript">
	alert("EMPLOYEE REGISTERED SUCCESSFULLY");
	window.location="emp.php";		
	
	</script>
<?php
	}
	}
?>



<br>

<fieldset>
	<legend><b>Serach Employee</b></legend>
	
<form action="" method="post">
	<input type="text" name="euser" placeholder="Search By Username" >
	<input type="submit" name="esearch" value="search">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="id" placeholder="Search By Id" >
	<input type="submit" name="esearch" value="search">

	
</form>	
	
	<?php
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"automobile");
	if(isset($_POST["esearch"]))
	{
	$res= mysqli_query($con,"select * from employee where eusername = '$_POST[euser]' || id = '$_POST[id]'");
		echo "<table border='1' align='center'>";
		echo "<tr>"; echo "<th>"; echo "id"; echo "</th>";
		echo "<th>"; echo "eusername"; echo "</th>";
		echo "<th>"; echo "name";echo "</th>";
		echo "<th>"; echo "email";echo "</th>";
		echo "<th>"; echo "contact";echo "</th>";
		echo "<th>"; echo "address";echo "</th>"; echo "</tr>";
	while($row= mysqli_fetch_array($res))
	{
		echo "<tr>"; echo "<th>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["eusername"]; echo "</td>";
		echo "<td>"; echo $row["name"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["contact"]; echo "</td>";
		echo "<td>"; echo $row["address"]; echo "</td>";
	 echo "</tr>";
	}
		echo "</table>";
	}
	?>
	
	
	
</fieldset>

<br>
<br>

<fieldset>
	<legend><b>Delete Employee Details</b></legend>
	<table><tr><td>
<form action="" method="post">
	<input type="text" name="euser" placeholder="Delete By Username">
	<input type="submit" name="edelete" value="DELETE">
	</td><td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="id" placeholder="Delete By Id">
	<input type="submit" name="edelete" value="DELETE">
	</form>
	</td></tr></table>	
<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"automobile");
if(isset($_POST["edelete"]))
{
mysqli_query($con,"delete from employee where eusername = '$_POST[euser]' || id = '$_POST[id]'");


?>
<script type="text/javascript">
alert("SUCCESS");
</script>
<?php

}
?>
</fieldset>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<center><h3><a href="ereport.php">Employee Report</h3></a>

</body>
</html>