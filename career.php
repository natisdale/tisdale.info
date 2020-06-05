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
			<h2><span class="year">2019</span><span class="institution">California State University, Chico</span></h2>
			<h3 class="cred">Student Assistant</h3>
		</div>
		<div class="cert">
			<p><span class="year">2018</span><span class="institution">PowerSchool</span></p>
			<p class="cred">Software Quality Assurance Intern</p>
		</div>
		<div class="cert">
			<p><span class="year">2016</span><span class="institution">Hewlett-Packard Enterprise</span></p>
			<p class="cred">Software Quality Assurance Engineer</p>
		</div>
		<div class="cert">
			<p><span class="year">2014</span><span class="institution">Hewlett-Packard Enterprise</span></p>
			<p class="cred">Technical Support Manager (Asia-Pacific)</p>
		</div>
		<div class="cert">
			<p><span class="year">2010</span><span class="institution">ArcSight</span></p>
			<p class="cred">Technical Support Engineer</p>
		</div>
	</main>
	<footer>
		<? echo $footer; ?>
	</footer>
	
	</div>
</body>
</html>
