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
<title>Lancia Delta S4</title>
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
</head><body vlink="red" alink="red" background="background\bg.jpg" link="red">

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
</ul></div><br><br><br><br>
<form action="book.php" method="get">
<b><font size="+3" color="red" face="Arial">Lancia Delta S4</font></b><br><br><br>
<hr>
<table width="91%" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td><img src="logo\s4_1985rac.jpg" alt="Lancia Delta S4 on the 1985 RAC Rally" width="335" border="1" height="200"></td>
<td><img src="logo\deltas4_cockpit_200.jpg" alt="Lancia Delta S4 cockpit" width="270" align="right" border="1" height="200"></td>
</tr>
</tbody></table>
<hr>

<p><b><font size="+2" color="red" face="Arial">Technical Details (Stradale)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="BUY" class="buy"/></font></b>
<br>&nbsp;
<table border="0" cellpadding="8" cellspacing="0">
<tbody><tr>
<td valign="top"><font face="Arial">Driveline</font></td>
<td><font face="Arial">longitudinal engine at centre/rear with four wheel drive system</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Engine</font></td>
<td><font face="Arial">1759cc (88.5x71.5mm) 16v dohc 4cyl supercharged and turbocharged with 250bhp @ 6,750rpm
<br>dry sump lubrication, Weber IAW injection, Marelli ignition </font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Suspension</font></td>
<td><font face="Arial">front : double wishbone with telescopic dampers and coil springs
<br>rear : double wishbone with twin telescopic dampers and coil springs
<br>wheels &amp; tyres (front &amp; rear) : 8x16" rims with 205/55 VR16
<br>wheelbase : 2440mm
<br>track (front/rear) : 1500mm / 1520mm</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Brakes</font></td>
<td><font face="Arial">front : discs, ventilated, diameter 300mm
<br>rear : discs, ventilated, diameter 300mm
<br>mechanical handbrake on the rear callipers</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Steering</font></td>
<td><font face="Arial">Rack and pinion with vacuum servo, 2.75 turns lock-to-lock</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Gearbox</font></td>
<td><font face="Arial">5 speed manual (ZF)</font></td>
</tr>


<tr>
<td valign="top"><font face="Arial">Weight</font></td>
<td><font face="Arial">1200kg
<br>distribution (front/rear) : 43.75% / 56.25%</font></td>
</tr>

</tbody></table>

</p><hr>
<table width="91%" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td><img src="logo\037cockpit_120.jpg" alt="Lancia Delta S4 cockpit " width="173" border="1" height="120"></td>
<td><img src="logo\037eng1_120.jpg" alt="Lancia Delta S4 engine " width="182" border="1" height="120"></td>
<td><img src="logo\037eng2_120.jpg" alt="Lancia Delta S4 engine " width="171" border="1" height="120"></td>
<td><img src="logo\037eng3_120.jpg" alt="Lancia Delta S4 engine " width="182" border="1" height="120"></div>
</td>
</tr>
</tbody></table>
<input type="hidden" value="lancia_deltas4" name="mname">
<input type="hidden" value="48 Lacs" name="price">

</form>
<hr>
</body></html>