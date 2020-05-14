<?php

// FETCHING VARIABLES
$name= "Jack";
$email= "sethlucas8@gmail.com";
$message= "test run"];

// DEFINGING VARIABLES
$mailto = "sethroblucas@gmail.com"
$headers = "From: ".$email;
$msg = wordwrap($message,70);

// SENDING EMAIL
mail ($mailto, $subject, $txt, $headers);
header("Location: index.html?mailsend");

?>