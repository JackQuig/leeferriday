<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		<meta charset="utf-8"/>
		<title>Lee Ferriday</title>
	</head>
<link rel="stylesheet" href="styles.css">
<nav id="navbar" class="nav">
   <p class="navbar-slogan">Improvement through partnership</p>
	<ul class="nav-list">
		<li>
			<a href="http://leeferriday.co.uk">Home</a>
		  </li>
		  <li>
			<a href="http://about.leeferriday.co.uk">About</a>
		  </li>
		  <li>
			<a href="http://contact.leeferriday.co.uk">Contact me</a>
		  </li>
	</ul>
</nav>
<div id="welcome-section" >
	<h1 class="maintext"><br><br>Lee Ferriday</h1>
	<h2 class="maintext">Contact us below for all enquiries</h2>
</div>
<form id="survey-form" action="contact.php" method="post">
	<label id="name-label">Name:</label>
	<input class="input" name="name" type="text" placeholder="John Smith"><br>
		<label id="email-label">Email:</label>
	<input class="input" name="email" type="email" placeholder="johnsmith@email.co.uk" required="email">
	  <br>
	  <label id="subject-label">Subject:</label>
	  <input class="input" name="subject" type="text" placeholder="Enquiry" required="text"><br>
	  <label id="message-label">Message:</label>
	<textarea class="input" id="messagearea" rows="5" name="message" type="text" placeholder="I would like to contact you because..." required="text"></textarea>
<br><button type="submit" value="Submit">Submit</button></form>
</html>
