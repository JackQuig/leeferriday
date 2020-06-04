<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8"/>
<title>Lee Ferriday Consultant</title>
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

<form id="survey-form" action="contact.php" method="post">
	<label id="name-label">Name:</label>
	<input name="name" type="text" placeholder="John Smith" required size="30"><br>
		<label id="email-label">Email:</label>
	<input name="email" type="email" placeholder="johnsmith@email.co.uk" required="email">
	  <br>
	  <label id="subject-label">Subject:</label>
	  <input name="subject" type="text" placeholder="Enquiry" required="text"><br>
	  <label id="message-label">Message:</label>
	<textarea rows="5" name="message" type="text" placeholder="I would like to contact you because..." required="text"></textarea>
<br><button type="submit" value="Submit">Submit</button></form>
<footer class="footer">
	<p>
		Created by Jack McQuiggin 2020
	</p>
</footer>
</html>
