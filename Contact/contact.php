<?php

if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

$mailto = "jackmcquiggin@hotmail.co.uk";
$headers = "From: ".$email;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailto, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
?>
<html lang="en">
<meta charset="utf-8"/>
<title>Thank you contacting us</title>
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
<p>
    Thank you for contacting us.
</p>
</html>