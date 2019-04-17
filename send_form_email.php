<?php

// define variables and set to empty values
$name = $email = $phone = $subject = $message = "";
$email_to = "";
$email_subject = "";
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = test_input($_POST["name"]);  //required
  $email = test_input($_POST["email"]);  //required
  $phone = test_input($_POST["phone"]);  //not required
  $subject = test_input($_POST["subject"]);  //required
  $message = test_input($_POST["message"]);  //required
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "info@yolandaadamscoffee.com";
 
    $email_subject = $subject; // required
    
    $email_from = $email; // required
 
     
    
    function clean_string($string) {
 
      	$bad = array("content-type","bcc:","to:","cc:","href");
 
     	return str_replace($bad,"",$string);
 
    }
 
     
 

    $email_message = "Form details below.\n\n";
     
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";
 
     
 
     
 
// create email headers
 
	$headers = 'From: '.$email_from."\r\n".
 
	'Reply-To: '.$email_from."\r\n" .
 
	'X-Mailer: PHP/' . phpversion();

/* if (!$errName && !$errEmail && !$errMessage && !$errHuman)  */

/* Message and fields have been checked and validated; now send message */
if (strlen($error_message) == 0) {
 
	if (mail ($email_to, $email_subject, $email_message, $headers)) {
		$result='<div class="alert alert-success">Thank You! We will be in touch.</div>';
	} else {
		$result='<div class="alert alert-danger">echo '.$error_message.' Sorry there was an error sending your message. Please try again later.</div>';
	}
}
else {
	$results='<div class="alert alert-danger">echo'.$error_message.' Please correct and send again.</div>';
}

}
 
 
?>
 

 
