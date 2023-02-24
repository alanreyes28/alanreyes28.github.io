<?php
$to = "alan.reyes@upr.edu";
$subject = "New message from website contact form";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$headers = "From: $name <$email>\r\nReply-To: $email";

if (mail($to, $subject, $message, $headers)) {
  echo "Message sent successfully!";
} else {
  echo "Message delivery failed...";
}
?>
