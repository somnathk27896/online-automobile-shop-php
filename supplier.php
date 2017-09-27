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
	<legend><b>Add Supplier</b></legend>
	<pre>
		Supplier Username:&nbsp;<input type="text" name="user"><br>
		Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name">
		
		email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email">
		
		contact:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="no"><br>
		Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="addr">
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="add">
	</pre>

</fieldset>
</form>
<?php
	if(isset($_POST["add"]))
	{
	$link=mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "automobile");
	$res=mysqli_query($link, "select * from supplier where username='$_POST[user]'");
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
	mysqli_query($link, "insert into supplier values('','$_POST[user]','$_POST[name]','$_POST[email]','$_POST[no]','$_POST[addr]')");
?>
	<script type="text/javascript">
	alert("Supplier REGISTERED SUCCESSFULLY");
	window.location="supplier.php";		
	
	</script>
<?php
	}
	}
?>



<br>

<fieldset>
	<legend><b>Serach Supplier</b></legend>
	
<form action="" method="post">
	<input type="text" name="user" placeholder="Search By Username" >
	<input type="submit" name="search" value="search">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="id" placeholder="Search By Id" >
	<input type="submit" name="search" value="search">

	
</form>	
	
	<?php
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"automobile");
	if(isset($_POST["search"]))
	{
	$res= mysqli_query($con,"select * from supplier where username = '$_POST[user]' || id = '$_POST[id]'");
		echo "<table border='1' align='center'>";
		echo "<tr>"; echo "<th>"; echo "id"; echo "</th>";
		echo "<th>"; echo "username"; echo "</th>";
		echo "<th>"; echo "name";echo "</th>";
		echo "<th>"; echo "email";echo "</th>";
		echo "<th>"; echo "contact";echo "</th>";
		echo "<th>"; echo "address";echo "</th>"; echo "</tr>";
	while($row= mysqli_fetch_array($res))
	{
		echo "<tr>"; echo "<th>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["username"]; echo "</td>";
		echo "<td>"; echo $row["name"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["no"]; echo "</td>";
		echo "<td>"; echo $row["addr"]; echo "</td>";
	 echo "</tr>";
	}
		echo "</table>";
	}
	?>
	
	
	
</fieldset>

<br>
<br>

<fieldset>
	<legend><b>Delete Supplier Details</b></legend>
	<table><tr><td>
<form action="" method="post">
	<input type="text" name="euser" placeholder="Delete By Username">
	<input type="submit" name="delete" value="DELETE">
	</td><td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="id" placeholder="Delete By Id">
	<input type="submit" name="delete" value="DELETE">
	</form>
	</td></tr></table>	
<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"automobile");
if(isset($_POST["delete"]))
{
mysqli_query($con,"delete from supplier where username = '$_POST[user]' || id = '$_POST[id]'");


?>
<script type="text/javascript">
alert("SUCCESS");
</script>
<?php

}
?>
</fieldset>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<center><h3>
<a href="sreport.php">Supplier Report</h3></a>

</body>
</html>