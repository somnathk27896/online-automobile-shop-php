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

<h1><center>Orders Report</h1>

<?php

	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"automobile");
	
	$res= mysqli_query($con,"select * from orders");
		echo "<table border='1' align='center'>";
		echo "<tr>"; echo "<th>"; 
		echo "id"; echo "</th>";
		echo "<th>"; echo "Username";echo "</th>";
		echo "<th>"; echo "Address";echo "</th>";
		echo "<th>"; echo "Contact";echo "</th>";
		echo "<th>"; echo "Car Model";echo "</th>";

		echo "<th>"; echo "Price";echo "</th>";
		echo "<th>"; echo "Date";echo "</th>";
		 echo "</tr>";
	while($row= mysqli_fetch_array($res))
	{
		echo "<tr>"; echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["username"]; echo "</td>";
		echo "<td>"; echo $row["addr"]; echo "</td>";
		echo "<td>"; echo $row["no"]; echo "</td>";
		echo "<td>"; echo $row["model"]; echo "</td>";
		echo "<td>"; echo $row["price"]; echo "</td>";
		echo "<td>"; echo $row["date"]; echo "</td>";

	 echo "</tr>";
	}
		echo "</table>";
	
	?>
	<br>
	<center>	<button onclick="window.print()">Print</button></center>