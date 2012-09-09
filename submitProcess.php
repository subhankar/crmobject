<?php
ob_start();
//Capture post values
$name = addslashes(trim($_POST['name']));
$email = trim($_POST['email']);
$query = addslashes(trim($_POST['suggestion']));
//Creating email values
$to = 'dsubhankar@gmail.com';
$subject = 'New Website Lead';
$message = '';
$message .= "Name ".$name."<BR />";
$message .= "Email ".$email."<BR />";
$message .= "Query ".$query."<BR />";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'From:<website@crmobject.com>' . "\r\n";
$headers .= 'Cc: crmobject@gmail.com' . "\r\n";
$headers .= 'Bcc: info@crmobject.com' . "\r\n";

//SENDING EMAIL
if(mail($to,$subject,$message,$headers)){
	$flag = 1;
}else{
	$flag = 0;
}
ob_clean();
header("Location: contactus.php?email=$flag");
exit(0);