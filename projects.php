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
		<div class="project">
			<h2><span class="year">2020</span><span class="institution">University of Califorina, Chico</span></h2>
			<h3 class="cred">CINS 465: Web Programming Fundamentals</h3>
			<p class="detail">Technologies: HTML, CSS, Vue-JS, Django, Channels, Nginx, Docker, Google Cloud</p>
			<p class="detail">Summary: Online art course system, where users and instructors can have a live critique session over chat.</p>
			<div id="cins465">
				<a href="https://cins465.tisdale.info/" target="_blank"><img src="images/cins465project.gif" width="299" height="532" alt=""/></a>
			</div>
		</div>
	</main>
	<footer>
		<? echo $footer; ?>
	</footer>
	
	</div>
</body>
</html>
