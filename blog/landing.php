<?php
include("config.php");
session_start();

if($_SESSION['login_user'] != true) {
    echo("Access denied!");
    exit();
} else {
    $display = "Hello {$_SESSION['login_user']}!";
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Chronicle | Landing Page | Fresno, Ca</title>
	<link href="../css/main.css" rel="stylesheet" type="text/css">
	<link href="../css/landing.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-2.2.1.min.js" type="text/javascript">
	</script>
</head>

<body>
	<style type="text/css">
		*{
			position:relative!important;
		}
		
		#cb{
			position:absolute!important;
		}
		
		.nav{
			overflow:hidden;
		}
	</style>
	<div id="cb">
		<svg height="50pt" preserveaspectratio="xMidYMid meet" style="z-index:1;position:absolute;" version="1.0" viewbox="0 0 419.000000 400.000000" width="50pt" xmlns="http://www.w3.org/2000/svg">
		<path class="st0" d="M2120 3800 c-776 -94 -1356 -598 -1536 -1335 -69 -284 -73 -671 -9 -975 101 -485 365 -881 738 -1109 310 -189 653 -274 1042 -258 496 21 849 166 1138 466 l89 92 -49 52 c-26 29 -89 96 -138 150 -50 54 -102 105 -117 113 -58 30 -114 14 -203 -60 -206 -171 -381 -232 -695 -243 -289 -10 -504 53 -708 207 -326 245 -497 705 -453 1213 45 507 294 879 699 1043 167 67 241 79 482 78 174 -1 216 -4 280 -21 161 -44 245 -84 448 -213 71 -45 142 -52 191 -18 19 12 90 100 158 193 l122 170 -52 47 c-219 198 -509 338 -812 394 -105 19 -496 28 -615 14z" fill="url(#blue-fill)" id="XMLID_4_" stroke="black" stroke-width="2" transform="translate(0.000000,400.000000) scale(0.100000,-0.100000)"></path>

		<defs>
			<lineargradient id="blue-fill" x1="0.5" x2="0.5" y1="1" y2="0">
				<stop offset="100%" stop-color="#dfcea2" stop-opacity="1">
					<animate attributename="offset" begin="0s; anim1.end" dur="3s" id="anim1" repeatcount="infinite" values="0;1"></animate>
				</stop>

				<stop offset="100%" stop-color="white" stop-opacity="1">
					<animate attributename="offset" begin="anim2.end;anim3.end" dur="3s" id="anim2" repeatcount="infinite" values="0;1"></animate>
				</stop>
			</lineargradient>
		</defs></svg>
	</div>


	<div id="body">
		<nav class="nav">
			<ul>
				<li class="nav-link">
					<a href="index.html">Home</a>
				</li>


				<li class="nav-link">
					<a href="about.html">About</a>
				</li>


				<li class="nav-link">
					<a href="products.html">Themes</a>
				</li>


				<li class="link">
					<a href="index.html">
					<div id="logo">
					</div></a>
				</li>


				<li class="nav-link">
					<a href="brands.html">Brands</a>
				</li>


				<li class="nav-link">
					<a href="contact.html">Contact</a>
				</li>


				<li class="nav-link">
					<a href="login.html">Login</a>
				</li>
			</ul>
		</nav>


		<div class="container" onclick="myFunction(this)">
			<div class="bar1">
			</div>


			<div class="bar2">
			</div>


			<div class="bar3">
			</div>
		</div>


		<main>
			<h1><?php echo $display; ?>
			</h1>
			<a href="todo.php">Create Blog</a>
		</main>


		<footer>
			<h4>CHRONICLE</h4>


			<table>
				<tr>
					<th>Payments</th>
				</tr>


				<tr>
					<td>
						<div id="paypal">
						</div>
					</td>
				</tr>
			</table>


			<ul id="legal">
				<li>
					<a href="#">Terms</a>
				</li>


				<li>
					<a href="#">Copyright</a>
				</li>


				<li>
					<a href="#">Legal</a>
				</li>


				<li>
					<a href="#">Sitemap</a>
				</li>


				<li>
					<a href="#">Privacy</a>
				</li>


				<li>
					<a href="#">Contact Us</a>
				</li>


				<li>
					<a href="#">Sign Up</a>
				</li>


				<li>
					<a href="#">Brands</a>
				</li>


				<li>Fresno, Ca</li>
			</ul>


			<ul class="social">
				<li>
					<a href="#"><i aria-hidden="true" class="fa fa-facebook fa-2x"></i></a>
				</li>


				<li>
					<a href="#"><i aria-hidden="true" class="fa fa-instagram fa-2x"></i></a>
				</li>


				<li>
					<a href="#"><i aria-hidden="true" class="fa fa-twitter fa-2x"></i></a>
				</li>
			</ul>
		</footer>
		<script type="text/javascript" src="Javascript/index.js"></script>
	</div>
</body>
</html>