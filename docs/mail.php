<?php
//mailing
$person = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'] + " From " + $mail;

$to = "jackcrawford2008@gmail.com";
$subject = "Mail from $person";
$headers = "From: no-reply@jacktcrawford.com";

mail($to,$subject,$message,$headers);

header('Location: http://jacktcrawford.com');


?>
