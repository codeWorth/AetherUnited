<?php

error_reporting(E_ALL);

$to      = "aun@aetherunited.com";
$subject = $_POST["name"];
$message = $_POST["message"];

$from = "From: " . $_POST["email"];
$headers = array($from,
    "Reply-To: " . $to,
    "X-Mailer: PHP/" . PHP_VERSION
);
$headers = implode("\r\n", $headers);

mail($to, $subject, $message, $headers);

header("Location: sent.html");
exit;

?>