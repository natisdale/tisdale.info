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
			<h2><span class="year">2021</span><span class="institution">University of Califorina, Chico</span></h2>
            		<h3 class="cred">Curator</h3>
			<p class="detail">Technologies: Python, Rest, SQL, tkinter</p>
            		<p class="detail">Python rest client for the New York Met Museum Open Access API</p>
            <div class="detail" id="curator">
                 	<a href="https://natisdale.github.io/curator/"><img src="https://lucid.app/publicSegments/view/a0a86283-2144-4c98-81b4-93c183523ed8/image.jpeg" width="400" alt="block diagram"/></a>
			</div>
		</div>
        <div class="project">
			<h2><span class="year">2020</span><span class="institution">University of Califorina, Chico</span></h2>
            		<h3 class="cred">CINS 548: Advanced Security</h3>
			<p class="detail">Technologies: Raspian, Pyhton, Django, Scapy, Selenium, Rest, Syslog and SQL</p>
            		<p class="detail">MyView was a Internet of Things team project which uses Scapy to identify user(s) presence and show the Dakboard of active users with debug and error logging to syslog.</p>
			<div class="detail" id="cins548">
				<a href="https://youtu.be/HqilVoYJWTM"><img src="images/cins548project.png" alt="Demo with syslog (no audio)"/></a>
			</div>
		</div>
		<div class="project">
			<h2><span class="year">2020</span><span class="institution">iMessage Stickers</span></h2>
			<p class="detail">Summary: Sticker App for iMessage on iPhone/iPad devices</p>
			<div class="detail" id="straightish">
				<a href="https://apps.apple.com/us/app/straightish-sticker-pack/id1515608082?ls=1"><img src="images/Download_on_the_App_Store_Badge_US-UK_RGB_blk_092917.png" alt="Download on the App Store"/></a>
			</div>
		</div>
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
