<?php

$to = 'shobhitrocks1103@gmail.com'; // replace this mail with yours
$firstname = $_POST["fname"];
$email= $_POST["email"];
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message ='
'.$firstname.'  '.$laststname.'
Email: '.$email.'
';

if (@mail($to, $email, $message, $headers))
{
    echo 'The message has been sent.';
}else{
echo 'failed';
}

?>