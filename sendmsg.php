
<?php

/* ACCOUNT SID
ACac81ad40e916a5e82bd3950ae4807c07
AUTH TOKEN
e95ee4cc75df606a77380b86211ce2a8
USERS
1 */
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

use Twilio\Rest\Client;

echo "Sending SMS! <br>";
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'ACac81ad40e916a5e82bd3950ae4807c07';
$auth_token = 'e95ee4cc75df606a77380b86211ce2a8';

// A Twilio number you own with SMS capabilities
$twilio_number = "+16476910985 ";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+14165695956',
    array(
        'from' => $twilio_number,
        'body' => 'Next bus is in 10 minutes..  !'
    )
);

echo "Done sending SMS! <br>";

?>


