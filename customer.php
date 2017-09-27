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
<a href="index.php">INDEX</a>
&nbsp;&nbsp;&nbsp;&nbsp;

<a href="logout.php">logout</a>
<br></center>





<br>

<fieldset>
	<legend><b>Serach Customer</b></legend>
	
	<table><tr><td>
<form action="" method="post">
	<input type="text" name="cuser" placeholder="Search By Username" >
	<input type="submit" name="search" value="search">
	</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="id" placeholder="Search By Id" >
	<input type="submit" name="search" value="search">
	</td></tr></table>
	
</form>	
	
	<?php
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"automobile");
	if(isset($_POST["search"]))
	{
	$res= mysqli_query($con,"select * from signup where username = '$_POST[cuser]' || id = '$_POST[id]'");
		echo "<table border='1' align='center'>";
		echo "<tr>"; echo "<th>"; echo "id"; echo "</th>";
		echo "<th>"; echo "First_name";echo "</th>";
		echo "<th>"; echo "Last_name";echo "</th>";
		echo "<th>"; echo "DOB";echo "</th>";
		echo "<th>"; echo "Gender";echo "</th>";
		echo "<th>"; echo "Address";echo "</th>";

		echo "<th>"; echo "email";echo "</th>";
		echo "<th>"; echo "contact";echo "</th>";
		echo "<th>"; echo "username"; echo "</th>";
		 echo "</tr>";
	while($row= mysqli_fetch_array($res))
	{
		echo "<tr>"; echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["fname"]; echo "</td>";
		echo "<td>"; echo $row["lname"]; echo "</td>";
		echo "<td>"; echo $row["dob"]; echo "</td>";
		echo "<td>"; echo $row["gender"]; echo "</td>";
		echo "<td>"; echo $row["address"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["m_no"]; echo "</td>";
		echo "<td>"; echo $row["username"]; echo "</td>";

	 echo "</tr>";
	}
		echo "</table>";
	}
	?>
	
	
	
</fieldset>

<br>
<br>

<fieldset>
	<legend><b>Delete Customer Details</b></legend>
	<table> <tr> <td>
<form action="" method="post">
	<input type="text" name="cuser" placeholder="Delete By Username">
	<input type="submit" name="delete" value="DELETE">
	</td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="id" placeholder="Delete By Id">
	<input type="submit" name="delete" value="DELETE">
	</td> </tr>
	</table>
	</form>	

<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"automobile");
if(isset($_POST["delete"]))
{
mysqli_query($con,"delete from signup where username = '$_POST[cuser]' || id = '$_POST[id]'");


?>
<script type="text/javascript">
alert("SUCCESS");
</script>
<?php

}


?>
</fieldset>
<br>
<a href="creport.php">Cutomer Report</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cfeedback.php">Customer Feedback</a>
</body>
</html>