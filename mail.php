<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "rtech777r@gmail.com";
$subject = "Mail From Quest Educ";
$txt ="Name = ". $name . "\r\n Email = " . $email."\r\n message=" . $message.

$header = "From: noreply@https://questeduc-theta.vercel.app" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("location: index.html")
?> 


