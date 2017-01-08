<?php
// Check for empty fields
if(empty($_POST['name1'])  		||
   empty($_POST['name2'])  		||
   empty($_POST['email']) 		||
   empty($_POST['univ']) 		||
   empty($_POST['at1']) 		||
   empty($_POST['at2']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
   mb_convert_variables('Shift_JIS', 'UTF-8', $_POST);//encodingをutf-8からshift_jisに変換
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$email_address = $_POST['email'];
$univ = $_POST['univ'];
$at1 = $_POST['at1'];
$at2 = $_POST['at2'];
$message = $_POST['message'];
// Create the email and send the message
$to = 'bikke015@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "RSVP";
$email_subject2 = "RSVP To:  BIKKE 25th Anniversary Party";
$email_body = "You have received the attendance confirming information.\n\n".
"Here are the details:\n\n
Name: $name1\n
BikkeName: $name2\n
Email: $email_address\n
Year of admission: $univ\n
First party: $at1\n
Second party: $at2\n
Message:\n
$message\n\n";

$email_body2 = "Thank you for your RSVP.\n\n".
"Here are the details:\n\n
Name: $name1\n
BikkeName: $name2\n
Email: $email_address\n
Year of admission: $univ\n
First party: $at1\n
Second party: $at2\n
Message:\n
$message\n\n
---------------------------------------\n
BIKKE\n
Kyoto University Tennis Club Since 1992\n
---------------------------------------";
// $headers = "From: noreply@narabikke.com\n";  This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers = "From: Attendance@narabikke.com\n";
$headers .= "Reply-To: $email_address";
$headers2 = "From: Bikke@narabikke.com\n";
mail($to,$email_subject,$email_body,$headers);
mail($email_address,$email_subject2,$email_body2,$headers2);

// csv

$fp = fopen('data.csv','a');
$return = fputcsv($fp, $_POST);
fclose($fp);

$fp = fopen('../data/shift_jis.csv','a');
$return = fputcsv($fp, $_POST);//予備
fclose($fp);

return true;
?>
