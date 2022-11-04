<?php
// require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
require("sendgrid-php/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases

define("SENDGRID_API_KEY", "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");
define("FROM_EMAIL", "sales@cbbio.us");
define("FROM_NAME", "Sales Columbia Basin Bioscience");
define("SUBJECT", "Inquiry CBB corporate site");


// Read the form values
$success = false;
$userName = isset($_POST['username']) ? preg_replace("/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['username']) : "";
$senderEmail = isset($_POST['email']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email']) : "";
$userPhone = isset($_POST['phone']) ? preg_replace("/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone']) : "";
$userSubject = isset($_POST['subject']) ? preg_replace("/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['subject']) : "";
$message = isset($_POST['message']) ? preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message']) : "";




try {
  // If all values exist, send the email
  if ($senderEmail && $userPhone) {
    $msgBody = " Name: " . $userName . " \n Email: " . $senderEmail . " \n Phone: " . $userPhone . " \n Subject: " . $userSubject . " \n Message: " . $message . "";

    $email = new \SendGrid\Mail\Mail();
    $email->setFrom(FROM_EMAIL, FROM_NAME);
    $email->setSubject(SUBJECT);
    $email->addTo(FROM_EMAIL, FROM_NAME);
    $email->addContent(
      "text/html",
      $msgBody
    );
    $sendgrid = new \SendGrid(SENDGRID_API_KEY);
    $response = $sendgrid->send($email);

    //Set Location After Successsfull Submission
    header('Location: contact.php?message=Successfull');
  } else {
    //Set Location After Unsuccesssfull Submission
    header('Location: contact.php?message=Failed');
  }

  // print $response->statusCode() . "\n";
  // print_r($response->headers());
  // print $response->body() . "\n";
} catch (Exception $e) {
  // echo 'Caught exception: ' . $e->getMessage() . "\n";
  header('Location: contact.php?message=Failed');
}
