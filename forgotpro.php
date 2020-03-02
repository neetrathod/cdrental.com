<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'data');


$email=$_POST['email'];

$c="SELECT `password` FROM `acc` WHERE `email`='$email'";
$run=mysqli_query($con,$c);
$num=mysqli_num_rows($run);
$row=mysqli_fetch_array($run);


$n="SELECT `name` FROM `acc` WHERE `email`='$email'";
$ru=mysqli_query($con,$n);
$ro=mysqli_fetch_array($ru);


if($num>0)
{
		
		
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'nr862638@gmail.com';                     // SMTP username
    $mail->Password   = 'PLSENTER PASSWORD';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('nr862638@gmail.com', 'Nitin rathod');
    $mail->addAddress($email, $email);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Forgot password";
	$mail->Body    = "Hi, dear user <b> {$ro['name']} </b> your password is <b> {$row['password']} </b> <br/> Thank you  : ) <br/><a href='http://localhost/n/log.php'> LogIn</a>";
    $mail->AltBody = "Hi, dear user <b> {$ro['name']} </b> your password is <b> {$row['password']} </b> <br/> Thank you  : ) <br/><a href='http://localhost/n/log.php'> LogIn</a>";

    $mail->send();
    echo "<script>
	var x=confirm('Yor password has been send on yor email. Do you want LogIn now.');
			if (x==true)
			{
				window.location='log.php';
			} 
			else
			{
				window.location='forgot.php';
			}
		</script>";
} 

	catch (Exception $e) 
	{
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}


}
	

else
{
	echo "<script> alert('Email not found'); window.location='forgot.php';</script>";
}

	
?>
