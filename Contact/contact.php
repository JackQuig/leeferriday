<?php
 {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

$mailto = "leeferriday@me.com";
$headers = "From: ".$email;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailto, $subject, $txt, $headers);
    header("Location: thankyou.html");
}
?>
