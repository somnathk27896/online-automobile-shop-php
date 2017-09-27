
<?php
$host="localhost";
$user="root";
$pass="";
$db="dtest";

mysql_connect($host,$user,$pass);
mysql_select_db($db);

if(isset($_POST['username']))
{
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
$res=mysql_query($sql);
if(mysql_num_rows($res)==1)
{
echo"Authentic Dealer";
exit();
}
else
{
echo"Inauthentic Dealer";
exit();
}
}

?>




<HTML><HEAD><TITLE>Dealer form</TITLE></HEAD>
<BODY background="background\bg.jpg">
<form method="post" action="Dlogin.php">
<center><u><B><FONT FACE="Bodoni MT bLACK" SIZE="+4" color="#151B54">www.ImportedCars.com</FONT></B></u></center>

<center><b><u><font face="arial" size="+2" color="green">DEALER's AUTHENTICITY FORM</font></u></b></center>

<TABLE>

<TR>
<td><img src="2.jpg">
<td><table><tr>
		<TD><b>Username:</b>
                 
                <input type="text" name="username" placeholder="username" size=30 maxlength=25/><br/><br/></TD>
		
	</TR>
	<TR>
		<TD><b>Password:</b>
                <input type="password" name="password" placeholder="password" size=30  maxlength=25 /><br/><br/></TD>
		
	</TR>
	
	
	
	
	
<TR><TD align=center height=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="submit" value="Log In"  /> 
   <input type="RESET" value="CLEAR" > </TD>
</TR>
</table>
</td>
</tr>
</table>
<hr size="5" color="gray">
<center><b>Copyright © 2014 www.ImportedCars.com</b></center>
</form>
</body>
</html>