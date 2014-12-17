<?php
require_once("../includes/functions.php");
if (isset($_POST["submit"])) {
  $EmailFrom = "bethmarie@photosbybethmarie.com";
  $EmailTo = "bethmarie@photosbybethmarie.com";
  $Subject = "Thank you for your interest.";
  $Name = Trim(stripslashes($_POST['name'])); 
  $Email = Trim(stripslashes($_POST['email'])); 
  $Message = Trim(stripslashes($_POST['message']));  
} else {
  redirect_to("contact.php");
}

// validation
$validationOK=true;
if (!$validationOK) {
  redirect_to("failure.php");
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = @mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  redirect_to("success.php");
}
else{
  redirect_to("failure.php");
}
?>