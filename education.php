<? include "include.php" ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nathan Tisdale</title>
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">
	<header>
		<? echo $header; ?>
		<nav>
			<? echo $nav; ?>
		</nav>
	</header>
	<main>
		<div class="academic">
			<h2><span class="year">2021</span><span class="institution">University of Califorina, Chico</span></h2>
			<h3 class="cred">B.S. Computer Information Systems</h3>
		</div>
		<div class="academic">
			<p><span class="year">2018</span><span class="institution">Butte College</span></p>
			<p class="cred">A.A. Art Studio</p>
			<p class="cred">A.A. Art History</p>
		</div>
		<div class="academic">
			<p><span class="year">2006</span><span class="institution">University of Davis Extension</span></p>
			<p class="cred">Certificate in Winemaking</p>
		</div>
	</main>
	<footer>
		<? echo $footer; ?>
	</footer>
	
	</div>
</body>
</html>
