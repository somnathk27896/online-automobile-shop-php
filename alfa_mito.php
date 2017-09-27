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

<html><head>
<title>Alfa Romeo Mi.To</title>

<style type="text/css">
body{
background-image:url(background/bg.jpg)}
.buy{
width:150px;
height:50px;
font-size:36px;
background-color:#FF0000;
}
*{
margin:0px;
padding:0px;
}
.container ul{
list-style:none;
}
.container ul li{
background-color:#666666;
width:120px;
border:1px solid white;
height:50px;
line-height:50px;
text-align:center;
float:left;
color:#FFFFFF;
position:relative;
}
.container ul li a{
	text-decoration: none;
	color:#000000;
}


.container ul li:hover{
background-color:#999999;
}

.container ul ul{
display:none;
}
.container ul li:hover > ul{
display:block;
}
.container ul ul ul{
margin-left:120px;
top:0px;
position:absolute;
}
</style>
</head><body alink="#ff0000" background="background\bg.jpg" bgcolor="#ffffff" link="#cc0000" text="#000000" vlink="#ff6666">

<table WIDTH="100%">
<tr>
<td><center><b><h1><font face="Arial">Welcome To</font></h1></b></center></td>
</tr>
<tr>
<td bgcolor="black">
<center><b><font face="Bodoni MT Black"><font color="orange" size="+4">www.ItalicCars.com</font></b></center>
</td>
</tr>
<tr>
<td>

</td>
</tr>
</tr>
</table>
<div class="container">
<ul><b><h4>
	<li><a href="Welcome.html">HOME</a></li>

	<li><a>MODELS</a>
		<ul>
			<li><a>Alfa Romeo</a>
				<ul>
					<li><a href="alf_spider.php">Alfa Spider</a></li>
					<li><a href="alfa_gtv.php">Alfa Romeo GTV</a></li>
					<li><a href="alfa_mito.php">Alfa MiTO</a></li>
					<li><a href="alfa_sz_and_rz.php">Alfa Romeo SZ and RZ</a></li>
				</ul>
			</li>
			<li><a>Ferrari</a>
				<ul>
					<li><a href="ferrari_california.php">California</a></li>
					<li><a href="ferrari_f40.php">F40</a></li>
					<li><a href="ferrari_599gtb.php">599 GTB Fiorano</a></li>
					<li><a href="ferrari612.php">612 Scaglietti
</a></li>
				</ul>
			</li>
			<li><a>Fiat</a>
			<ul>
					<li><a href="fiat_stilo.php">Stilo</a></li>
					<li><a href="fiat_coupe.php">Coupe</a></li>
					<li><a href="fiat_punto.php">Punto</a></li>
					<li><a href="fiat_linea.php">Linea</a></li>
				</ul>
			</li>
			<li><a>Lancia</a>
			<ul>
					<li><a href="lancia_dedra.php">Dedra</a></li>
					<li><a href="lancia_deltas4.php">Delta S4</a></li>
					<li><a href="lancia_delta2008.php">Delta(2008+)</a></li>
					<li><a href="lancia_flamania.php">Flamania</a></li>
				</ul>
			</li>
		</ul>
	
	
	</li>
	<li><a href="wallpapers.html">GALLERY</a></li>

	<li><a>HISTORY</a>
		<ul>
			<li><a href="alfa_history.html">Alfa Romeo</a></li>
			<li><a  href="ferrari_history.html">Ferrari</a></li>
			<li><a href="fiat_history.html">Fiat</a></li>
			<li><a href="lancia_history.html">Lancia</a></li>
		</ul>	
	</li>
	<li><a href="logout.php">LOGOUT</a></li>
	<li><a>ABOUT</a></li>
</b></h4>
</ul></div><br><br>

<form action="book.php" method="get">

<br>
<b><font color="#ff0000" face="Arial" size="+3">Alfa Romeo Mi.To</font></b>

</font></p><p><font face="Arial"><center>
</font></p><p><font face="Arial"></font></center>
<table border="0" cellpadding="0" cellspacing="0" width="94%">
<tbody><tr>
<td><div align="left"><img src="logo\mito_3.jpg" alt="Alfa Romeo Mi.To" align="left" border="1" height="200" width="357"></div></td>
<td>
<div align="right"><img src="logo\mito_2.jpg" alt="Alfa Romeo Mi.To" align="right" border="1" height="200" width="337"></div>
</td>
</tr>
</tbody></table>
<hr>

<p><b><font color="#ff0000" face="Arial" size="+2">Technical Details</font></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp     	&nbsp;<input type="submit" value="BUY" class="buy"/>
<br>&nbsp;<br>&nbsp;
<table border="0" cellpadding="8" cellspacing="0">
<tbody><tr>
<td valign="top"><font face="Arial">Driveline</font></td>
<td><font face="Arial">transverse engine at front with front wheel drive</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Engines</font></td>
<td><font face="Arial">
1368cc (72x84mm) 8v sohc 4 cylinder inline with 78bhp @ 6,000rpm and 120Nm @ 4,750rpm
<br>1368cc (72x84mm) 16v dohc 4 cylinder inline with 95bhp
<br>1368cc (72x84mm) 16v dohc 4 cylinder turbocharged inline with 155bhp @ 5,500rpm and 230Nm @ 3,000rpm
<br>1248cc (69.6x82mm) 16v MultiJet 4 cylinder turbocharged diesel with 90bhp @ 4,000rpm
<br>1598cc (79.5x80.5mm) 16v dohc 4 cylinder turbocharged diesel with 120bhp @ 3,750rpm and 320Nm @ 1,750rpm
</font></td>
</tr>

<tr>
<td valign="top"><font face="Arial">Suspension</font></td>
<td><font face="Arial">front : MacPherson strut
<br>rear : semi-independent torsion beam
<br>wheelbase : 2511mm
<br>track (front/rear) : 1483mm / 1475mm</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Brakes</font></td>
<td><font face="Arial">front : discs (diameters : 78bhp 257mm, 120bhp 281mm, 155bhp 305mm)
<br>rear : discs (diameter 251mm)</font></td>
</tr>
<tr>
<td><font face="Arial">Gearbox</font></td>
<td><font face="Arial">6-speed plus reverse manual with dual-cable control</font></td>
</tr>

<tr>
<td><font face="Arial">Steering</font></td>
<td><font face="Arial">Rack and pinion with electric power assist</font></td>
</tr>
<tr>
<td><font face="Arial">Weights</font></td>
<td><font face="Arial">kerb weight (78bhp/120bhp/155bhp) : 1080kg / 1205kg / 1145kg</font></td>
</tr>

</tbody></table>

</p>
</p><hr>



<table border="0" cellpadding="0" cellspacing="0" width="94%">
<tbody><tr>
<td><div align="left"><img src="logo\mito003.jpg" alt="Alfa Romeo Mi.To" align="left" border="1" height="220" width="373"></div></td>
<td>
<div align="right"><img src="logo\mito004.jpg" alt="Alfa Romeo Mi.To" align="right" border="1" height="220" width="403"></div>
</td>
</tr>
</tbody></table>
<hr>
<input type="hidden" value="alfa_mito" name="mname">
<input type="hidden" value="45 Lacs" name="price">

</form>


</body></html>