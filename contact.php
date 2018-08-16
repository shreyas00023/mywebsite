<?php $name = $_POST['demo-name'];
$email = $_POST['demo-email'];
$message = $_POST['demo-message'];
$formcontent="From: $name \n Message: $message";
$recipient = "shreyas00023@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
