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
	$result='<div class="alert alert-danger">echo'.$error_message.' Please correct and send again.</div>';
}

}
 
 
?>
 


<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="YolandaAdamsCoffee.com - Offering coffee to brew and share with friends">
		<meta name="author" content="Valerie Rickert, CCP">
	<link href='https://fonts.googleapis.com/css?family=Lobster+Two:700italic' rel='stylesheet' type='text/css'>
	
	<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
	
		<title>YolandaAdamsCoffee</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="yolanda_coffee.css" >

<!-- Font Awesome libraries -->
<link rel="stylesheet " href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css ">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js "></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js "></script>
    <![endif]-->
																																				
  </head>
<body>
	<header class="navbar navbar-default navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
		<div class="container">
		<!-- Logo, Navigation, and Search bars! -->
		   	<div class="navbar-header">
		   		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
		   			<span class="sr-only">Toggle navigation</span>
		   			<span class="icon-bar text-center"></span>
		   			<span class="icon-bar text-center"></span>
		   			<span class="icon-bar text-center"></span>
		   			<span class="icon-bar text-center"></span>
		   		</button>
		   		<!-- another help says not to use a span on the image; so remove class of col, etc even center-block -->
		   		<div class="navbar-brand"><a href="http://www.yolandaadamslive.com">
		   	<img class="yolanda-logo" src="/pics/YolandaLogo-small.png"></a>
		   	
				<h5 class="navbar-text yolanda-slogan pull-right">Wake Up With Yolanda!</h5>
				</div>                                  
				<!-- class="col-xs-9 col-md-9 text-left"  -->

		   	</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

				<ul class="nav navbar-nav to-right text-center">
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="yolanda_coffee_shop.html">Shop</a></li>
					<li><a href="yolanda_coffee_about.html">About</a></li>
					<li><a href="yolanda_coffee_contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>


<div id="Home" class="container about">
	<div class="row clearfix">
		<div class="col-md-6">
			<img class="img-responsive" src="/pics/Lets-Get-Some-Coffee-opt-203kb.jpg">
		</div>
		<div class="col-md-6">
			<div class="form-heading text-center">
				<h2>We Love Mail!</h2>
			</div>
<!--      box-shadow: 10px 10px 5px #888888;  -->			
			<div class="well well-format">
			 	<p class="text-left">
			 		Questions about an order?&nbsp; Just want to talk?&nbsp; 
			 	</p>
			 	<p class="text-justify">Our Customer Service is available 24 hours a day / 7 days a week. Call us anytime.  
			 	Our number is <b><em>1-800-267-0331</em></b>.<br><br>Or use the form below.  We will get back with you ASAP. 
			 	</p>
			 </div>
			 
			 <div class="contact-form">
<!--  enctype="text/plain" accept-charset="UTF-8" -->			 
			 	<form class="form-horizontal col-md-12" role="form" action="" method="post">
			 		
			 		
			 		<div class="form-group">
			 			<label for="name" class="sr-only">Name</label>  
			 			<div class="col-md-12">
			 				<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo htmlspecialchars($_POST['name']); ?>" required
			 				title="Enter your name"/>
			 				
			 			</div>
			 		</div>
			 		
			 		<div class="form-group">
			 			<label for="email" class="sr-only">Email</label> 
			 			<div class="col-md-12">
			 				<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>" required
			 				title="Enter a valid email address"
			 				pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
			 			</div>
			 		</div>
			 		
			 		<div class="form-group">
			 			<label for="phone" class="sr-only">Phone</label>
			 			<div class="col-md-12">
			 				<input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone" value="<?php echo htmlspecialchars($_POST['phone']); ?>"
			 				title="Phone number should be in xxx-xxx-xxxx format"
			 				pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/>
			 			</div>
			 		</div>
			 		
			 		<div class="form-group">
			 			<label for="subject" class="sr-only">Subject</label>
			 			<div class="col-md-12">
			 				<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="<?php echo htmlspecialchars($_POST['subject']); ?>" required
			 				title="Give us a clue what your message is about"
			 				pattern=".+"/>
			 			</div>
			 		</div>
			 		
			 		<div class="form-group">
			 			<label for="message" class="sr-only">Message</label> 
			 			<div class="col-md-12">
			 				<textarea class="form-control" name="message" id="message" rows=5 cols=70 placeholder="What's On Your Mind?" required value="<?php echo htmlspecialchars($_POST['message']); ?>" ></textarea>
			 			</div>
			 		</div>
			 		
			 		<div class="form-group">
			 			<div class="col-md-12 text-center">
			 				<button id="submit" name="submit" type="submit" class="btn btn-lg btn-warning">Send Us A Note!</button>
			 			</div>
			 		</div>
			 		<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<! Will be used to display an alert to the user>
							<?php echo $result; ?>	
						</div>
					</div>
			 	</form>
			 </div>
			</div>  <!-- end of heading and contact form div -->

	</div>  <!-- end of row -->
</div>  <!-- end of div for home page -->


	<hr>																																																								 
    <footer class="footer">
		<!-- The footer must be OUTSIDE of the page container in order for it to position at the BOTTOM of the page!  -->
 <div class="col-xs-12 col-md-12 footer-div text-center text-muted"><a href="yolanda_coffee_privacy_policy.html">Privacy Policy</a> &middot; <a href="yolanda_coffee_terms_and_conditions.html">Terms and Conditions</a>
 </div>
 <div class="col-xs-12 col-md-12 center-block">
 	<img class="center-block" src="/pics/Visa_MC_AMEX_Discover_logos.png">
 </div>
 <hr>
 <div class="col-xs-12 col-md-12 footer-div ftr-div-2 text-muted text-center">
 <p><a href="index.html">Home</a> &middot; <a href="yolanda_coffee_shop.html">Shop</a> &middot; <a href="yolanda_coffee_about.html">About</a> &middot; <a href="yolanda_coffee_contact.php">Contact</a></p>
 <p>Copyright &copy; 2016 &nbsp; YolandaAdamsCoffee.com &nbsp; All Rights Reserved</p>
  </div>  
    </footer>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js "></script>			

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js "></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js "></script>
		  </body>
</html>