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

<?php echo $_SESSION["name"]; ?>
<a href="index.php">INDEX</a>


<a href="logout.php">logout</a>
<br></center>







<fieldset>
	<legend>Serach Order</legend>
<table><tr><td>
	<pre>
<form action="" method="post">
	<input type="text" name="t1" placeholder="search by Username">
	
	<input type="submit" name="search" value="search" >
	&nbsp;&nbsp;&nbsp;</pre>
</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>  OR</h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>
<pre>
			<input type="text" name="t2" placeholder="search by id">
			
			<input type="submit" name="search" value="search">
</pre>
</tr>

	</table>
	</form>	
	<?php
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"automobile");
	if(isset($_POST["search"]))
	{
	$res= mysqli_query($con,"select * from orders where username = '$_POST[t1]' || id='$_POST[t2]' ");
		echo "<table border='1' align='center'>";
		echo "<tr>"; echo "<th>"; echo "id"; echo "</th>";
		echo "<th>"; echo "C_username"; echo "</th>";
		echo "<th>"; echo "C_Address";echo "</th>";
		echo "<th>"; echo "C_No";echo "</th>";
		echo "<th>"; echo "Model";echo "</th>";
		echo "<th>"; echo "Price";echo "</th>";
		echo "<th>"; echo "O_Date";echo "</th>";echo "</tr>";
	while($row= mysqli_fetch_array($res))
	{
		echo "<tr>"; echo "<th>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["username"]; echo "</td>";
		echo "<td>"; echo $row["addr"]; echo "</td>";
		echo "<td>"; echo $row["no"]; echo "</td>";
		echo "<td>"; echo $row["model"]; echo "</td>";
		echo "<td>"; echo $row["price"]; echo "</td>";
		echo "<td>"; echo $row["date"]; echo "</td>";

	 echo "</tr>";
	}
		echo "</table>";
	}
	?>
	
	
	
</fieldset>



<fieldset>
	<legend>Delete Order</legend>
	<pre>
<form action="" method="post">
	<input type="text" name="id" placeholder="Transaction Id">
	
	<input type="submit" name="delete" value="DELETE">
	</pre>
</form>	

<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"automobile");
if(isset($_POST["delete"]))
{
mysqli_query($con,"delete from orders where id = '$_POST[id]'");


?>
<script type="text/javascript">
alert("SUCCESS");
</script>
<?php

}


?>
<center>
<a href="oreport.php">Order Report</a>
</body>
</html>