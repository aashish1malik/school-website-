<?php
$name=$_POST['name'];
$visitor_email = $_POST['email'];
$subject= $_POST['subject'];
$message = $_POST['message'];

$email_from='ashish.123456789.hello@gmail.com';
$email_subject='NEW FORM SUBMISSION';
$email_body="User Name:$name.\n".
              "User Email:$visitor_email.\n".
              "subject:$subject.\n".
              "User Message:$message.\n".;


$to="ashish.123456789.hello@gmail.com";
$headers="From: $email_from \r\n";
$headers .="Reply-To:$visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");




?>