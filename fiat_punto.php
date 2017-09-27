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
<title>Fiat Punto</title>
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
</head><body alink="red" background="background\bg.jpg" bgcolor="red" link="red" vlink="red">

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
</ul></div><br><br><br><br><br>

<b><font color="red" face="Arial" size="+3">Fiat Punto (1999 on)</font></b><br><br><br>
<form action="book.php" method="get">
<p><img src="logo\punto188_004xx.jpg" alt="Fiat Punto" align="right" border="1" height="200" width="337"><img src="logo\npunto1.jpg" alt="Revised 2003 Fiat Punto 3-door" align="right" border="1" height="200" width="309">\<hr><br><br><br><br><br><br><br><br><br><br>


<p><b><font color="red" face="Arial" size="+2">Technical Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="BUY" class="buy"/></font></b>
<br>&nbsp;
<table border="0" cellpadding="8" cellspacing="0">
<tbody><tr>
<td valign="top"><font face="Arial">Driveline</font></td>
<td><font face="Arial">transverse engine at front with front wheel drive</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Suspension</font></td>
<td><font face="Arial">front
: MacPherson strut with telescopic dampers and coil springs plus anti-roll bar
<br>rear
: torsion beam axle with telescopic dampers and coil springs
<br>wheelbase : 2460mm
<br>front track : 1398mm (Sporting &amp; HGT 1410mm), (diesels 1402mm)
<br>rear track : 1392mm (Sporting 1399mm), (HGT 1397mm), (diesels 1395mm)</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Brakes</font></td>
<td><font face="Arial">front : discs, diameter 240mm (8V), 257mm (all others), (HGT &amp; JTD ventilated)
<br>rear : drums, diameter 180mm (HGT : 240mm discs)
<br>handbrake operating on the rear via a cable</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Gearbox</font></td>
<td><font face="Arial">5 or 6 speed manual
<br>Speedgear
- CVT (six or seven preset ratios)
<br>Dualogic - five speed clutchless semi-automatic transmission</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Steering</font></td>
<td><font face="Arial">Rack and pinion
<br>electrical power assistance (two-stage 'Dualdrive' system)</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Kerb Weight</font></td>
<td><font face="Arial">range from 860kg (3 door 1.2) to 1055kg (5 door 1.9 JTD)
<br>Sporting : 930kg
<br>HGT : 1040kg</font></td>
</tr>
</tbody></table>
<hr>
<table border="0" cellpadding="0" cellspacing="0" cols="2" width="91%">
<tbody><tr>
<td>
<align="left">
<img src="logo\punto188_009xs.jpg" alt="Fiat Punto 3-door - click for larger image" border="1" height="100" width="185"></a></td>
<td><align="right">
<img src="logo\punto188_010xs.jpg" alt="Fiat Punto 5-door - click for larger image" border="1" height="100" width="186"></a></td>

</tr>
</tbody></table>
<hr>
<input type="hidden" value="fiat_punto" name="mname">
<input type="hidden" value="22 Lacs" name="price">

</form>
</p><p></p><hr>
</body></html>