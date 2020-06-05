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
		<div class="cert">
			<h2><span class="year">2015</span><span class="institution">ISC<span class="super">2</span></span></h2>
			<h3 class="cred"><a href="https://www.isc2.org/MemberVerification?LastName=Tisdale&MemberNumber=462723" title="Verify" target="_self">Certified Secure Software Lifecycle Professional</a></h3>
		</div>
		<div class="cert">
			<p><span class="year">2015</span><span class="institution">ASTQB</span></p>
			<p class="cred"><a href="https://atsqa.org/list-of-certified-testers?_ga=2.126516229.947509943.1588368222-2058275776.1587955253" title="Verify" target="_self">Certified Tester - Foundation Level</a></p>
		</div>
		<div class="cert">
			<p><span class="year">2014</span><span class="institution">ISC<span class="super">2</span></span></p>
			<p class="cred"><a href="https://www.isc2.org/MemberVerification?LastName=Tisdale&MemberNumber=462723" title="Verify" target="_self">Certified Information Systems Security Professional</a></p>
		</div>
		<div class="cert">
			<p><span class="year">2014</span><span class="institution">EC-Council</span></p>
			<p class="cred"><a href="https://aspen.eccouncil.org/Verify" title="Verify" target="_self">Certified Ethical Hacker</a></p>
		</div>
		<div class="cert">
			<p><span class="year">2014</span><span class="institution">Cloud Security Alliance</span></p>
			<p class="cred">Certified Cloud Security Knowledge</p>
		</div>
	</main>
	<footer>
		<? echo $footer; ?>
	</footer>
	
	</div>
</body>
</html>
