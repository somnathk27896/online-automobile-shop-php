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

<h1><center>Supplier Report</h1>

<?php

	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"automobile");
	
	$res= mysqli_query($con,"select * from supplier");
		echo "<table border='1' align='center'>";
		echo "<tr>"; echo "<th>"; 
		echo "id"; echo "</th>";
		echo "<th>"; echo "Username";echo "</th>";
		echo "<th>"; echo "Name";echo "</th>";
		echo "<th>"; echo "Email";echo "</th>";
		echo "<th>"; echo "Contact";echo "</th>";
		echo "<th>"; echo "Address";echo "</th>";
		 echo "</tr>";
	while($row= mysqli_fetch_array($res))
	{
		echo "<tr>"; echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["username"]; echo "</td>";
		echo "<td>"; echo $row["name"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["no"]; echo "</td>";
		echo "<td>"; echo $row["addr"]; echo "</td>";

	 echo "</tr>";
	}
		echo "</table>";
	
	?>
	<br>
	<center>	<button onclick="window.print()">Print</button></center>