<?php

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$message = $_POST['message'];

// // Create the email and send the message
// $to = 'yutakafumimario527@gmail.com';
// $email_subject = "RSVP";
// // $email_subject2 = "RSVP To:  BIKKE";
// $email_body = "You have received the attendance confirming information.\n\n".
// "Here are the details:\n\n
// BikkeName: $name2\n
// Year of admission: $univ\n
// First party: $q1\n
// Message:\n
// $message\n\n";
// $headers = "From: Attendance@narabikke.com\n";
// mail($to,$email_subject,$email_body,$headers);

// csv
$ShiftJIS = $_POST;//書き込むデータ
mb_convert_variables('Shift_JIS', 'UTF-8', $ShiftJIS);//Exelがshift_jisに対応

$fp = fopen('data.csv','a');
$return = fputcsv($fp, $ShiftJIS);
fclose($fp);

$fp = fopen('../data/shift_jis.csv','a');
$return = fputcsv($fp, $ShiftJIS);//shift_jis data
fclose($fp);

$fp = fopen('../data/utf.csv','a');
$return = fputcsv($fp, $_POST);//utf-8 data
fclose($fp);

return true;
?>
