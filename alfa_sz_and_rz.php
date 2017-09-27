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
<title>Alfa Romeo SZ and RZ</title>
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
<b><font color="#ff0000" face="Arial" size="+3">Alfa Romeo SZ &amp; RZ</font></b>

<font face="Arial"><br>&nbsp;
</p><hr>
<p><b><font color="#ff0000" face="Arial" size="+2">Technical Details&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="BUY" class="buy"/></font></b>
<br>&nbsp;
<br>&nbsp;
<table border="0" cellpadding="8" cellspacing="0">
<tbody><tr>
<td valign="top"><font face="Arial">Driveline</font></td>
<td><font face="Arial">longitudinal engine at front with rear wheel drive</font></td>
</tr>
<tr>
<td><font face="Arial">Engine</font></td>
<td><font face="Arial">2959cc (93x72.6mm) sohc (per bank) V6 with 210bhp @ 6,200rpm</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Suspension&nbsp;</font></td>
<td><font face="Arial">front : double wishbone with coil springs and telescopic dampers plus anti-roll bar
<br>rear : de Dion with transverse link, coil springs and telescopic dampers plus anti-roll bar
<br>Ground clearance adjustable by 40mm
<br>wheelbase : 2510mm
<br>track (front/rear) : 1464mm/1426mm</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Brakes</font></td>
<td><font face="Arial">front : ventilated discs, diameter 284mm
<br>rear : ventilated discs, diameter 250mm
<br>rear load proportioning valve
<br>handbrake operating on the rear via cable
<br>dual hydraulic circuit with servo assistance</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Gearbox</font></td>
<td><font face="Arial">5 speed manual
<br>hydraulically operated single plate clutch (diameter 215mm)</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Steering</font></td>
<td><font face="Arial">Rack and pinion with speed sensitive hydraulic power assistance
<br>3.2 turns lock to lock</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Wheels</font></td>
<td><font face="Arial">front : 7Jx16 (205/55 ZR16 tyres)
<br>rear : 8Jx16 (225/50 ZR16 tryes)</font></td>
</tr>
<tr>
<td><font face="Arial">Kerb weight</font></td>
<td><font face="Arial">SZ : 1260kg (56% front, 44% rear)</font></td>
</tr>
</tbody></table>
<input type="hidden" value="alfa_sz_and_rz" name="mname">
<input type="hidden" value="41 Lacs" name="price">


</form>
</p>
</body></html>