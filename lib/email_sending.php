<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; // for error handling

require_once '../vendor/autoload.php'; //loads the dependencies you downloaded

//Sender
$email_sender ='frifster2014@gmail.com';
$email_password ='101789Eug';
$from_email = "purefood@puregroup.com";
$from_name =  "Pure Food";

//Receiver
$to_email = "oxino.renzchler@gmail.com";
$to_name = "Renz";
$mail_subject = "Pure Food Order#ajd5423sad5663214665";
$mail_body = "<p>Your order has been received and is being processed.</p>";

$mail = new PHPMailer(true);

try{
	//Settings
	$mail->SMTPDebug = 0; //level of debug messaging 4 is the lowest, 1 is the highest
	$mail->isSMTP(); //make sures to use SMTP to mail.
	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);

	$mail->SMTPAuth = true; // if you are going to use SMTP Authentication
	$mail->SMTPSecure = 'tls'; //Enables TLS encryption
	$mail->Host = 'smtp.gmail.com'; //smtp host of gmail
	$mail->Port = 587; //This is the default mail submission port

	//Sender
	$mail->Username = $email_sender;
	$mail->Password = $email_password;
	$mail->setFrom($from_email,$from_name);

	//Receiver
	$mail->addAddress($to_email,$to_name);

	//Actual Email Content
	$mail->isHTML(true); //allows HTML syntax
	$mail->Subject = $mail_subject;
	$mail->Body = $mail_body;
	
	//Sending Email
	if($mail->send())
		echo "Email Sent";


}catch(Exception $error){
	echo 'Message couldn\'t be sent. Mailer Error:' . $mail->ErrorInfo;
}
