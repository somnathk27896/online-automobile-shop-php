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
 <title>Fiat Stilo</title>
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
</head><body alink="red" background="background\bg.jpg" link="red" vlink="red">


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

<form action="book.php" method="get">
<b><font color="red" face="Arial" size="+3">Fiat Stilo</font></b><br><br>
<p>
<table border="0" cellpadding="0" cellspacing="0" cols="2" width="91%">
<tbody><tr>
<td><img src="logo\stilo_10xx.jpg" alt="Fiat Stilo (3-door)" border="1" height="200" width="261"></td>
<td>
<div align="right"><img src="logo\stilo_11xx.jpg" alt="Fiat Stilo (5-door)" border="1" height="200" width="268"></div>
</td>
</tr>
</tbody></table>
<hr>
<p><b><font color="red" face="Arial" size="+2">Technical Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="BUY" class="buy"/>
</font></b>
<br>&nbsp;
<br>&nbsp;
<table border="0" cellpadding="8" cellspacing="0">
<tbody><tr>
<td valign="top"><font face="Arial">Driveline</font></td>
<td><font face="Arial">transverse engine at front with front wheel drive</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial,Helvetica">Engines</font></td>
<td><font face="Arial">1242cc (70.8x78.9mm) dohc 16V 4-cyl with 80bhp @ 5,000rpm
<br>1368cc (72x84mm) 16v 4 cylinder dohc with 95bhp @ 5,800rpm
<br>1596cc (80.5x78.4mm) dohc 16V 4-cyl with 103bhp @ 5,750rpm
<br>1598cc (80.5x78.4mm) dohc 16V 4-cyl with 103bhp @ 5,750rpm
<br>1747cc (82x82.7mm) dohc 16V 4-cyl with 133bhp @ 6,400rpm
<br>2446cc (83x90.4mm) dohc 20V 5-cyl with 170bhp @ 6,000rpm 
<br>1910cc (82x90.4mm) sohc 4-cyl turbo diesel with 80bhp @ 4,000rpm
<br>1910cc (82x90.4mm) sohc 4-cyl turbo diesel with 115bhp @ 4,000rpm
<br>1910cc (82x90.4mm) sohc 4-cyl turbo diesel (MultiJet) with 100bhp @ 4,000rpm
<br>1910cc (82x90.4mm) sohc 4-cyl turbo diesel (MultiJet) with 120bhp @ 4,000rpm
<br>1910cc (82x90.4mm) dohc 4-cyl 16v turbo diesel (MultiJet) with 150bhp @ 4,000rpm
</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Suspension</font></td>
<td><font face="Arial">front
: MacPherson strut with telescopic dampers and coil springs plus anti-roll bar</font>
<br><font face="Arial">rear
: torsion beam axle with telescopic dampers and coil springs</font>
<br><font face="Arial">wheelbase : 2600mm</font>
<br><font face="Arial">track (front/rear)&nbsp; : 1514mm/1508mm all except Abarth : 1518mm/1512mm</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Brakes</font></td>
<td><font face="Arial">front : ventilated discs, diameter 257mm (1.2 &amp; 1.6), 284mm (1.8 &amp; diesels), 281mm (Abarth)</font>
<br><font face="Arial">rear : discs, diameter 251mm (all)</font> 
<br><font face="Arial">handbrake operating on the rear via a cable</font>
<br><font face="Arial">ABS, EBD, ASR, MSR plus ESP on some models</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Gearbox</font></td>
<td><font face="Arial">5 or 6 speed manual</font>
<br><font face="Arial">Selespeed hydraulically operated clutchless system on Abarth</font>
<br><font face="Arial">dual cable gearshift mechanism and hydraulic clutch on all variants (except Abarth)</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Steering</font></td>
<td><font face="Arial">Rack and pinion</font>
<br><font face="Arial">electrical power assistance</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Kerb Weight</font></td>
<td><font face="Arial">range from 1090kg (3 door 1.2) to 1320kg (5 door 1.9 JTD)</font>
<br><font face="Arial">3dr Abarth : 1265kg</font>
<br><font face="Arial">5dr 1.8&nbsp; : 1295kg</font></td>
</tr>
</tbody></table>

<input type="hidden" value="fiat_stilo" name="mname">
<input type="hidden" value="65 Lacs" name="price">



</form>
</p><p>
</p><hr>
</body></html>