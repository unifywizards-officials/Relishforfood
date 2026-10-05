<?php

// Define some constants
define("RECIPIENT_NAME", "Relish For Food");
define("RECIPIENT_EMAIL", "anandsinghar0001@gmail.com");

// Read the form values
$success = false;
$userName = isset($_POST['name']) ? preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name']) : ""; 
$senderEmail = isset($_POST['email']) ? preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['email']) : ""; 
$message = isset($_POST['message']) ? preg_replace("/(From:|To:|BCC:|CC:|Message:|Content-Type:)/", "", $_POST['message']) : "";

// If all values exist, send the email
if ($userName && $senderEmail && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $userName . " <" . $senderEmail . ">";
  $msgBody = "Message: " . $message;
  $success = mail($recipient, "Contact Form Submission", $msgBody, $headers);

  // Set Location After Successful Submission
  header('Location: contact.html?message=Successful');
} else {
  // Set Location After Unsuccessful Submission
  header('Location: index.html?message=Failed');
}

?>
