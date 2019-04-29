<?php
require_once ("../core/client.php");
include "Nexmo/src/NexmoMessage.php" ;




/**
 * To send a text message.
 *
 */

// Step 1: Declare new NexmoMessage.
$nexmo_sms = new NexmoMessage('64b786ee','1X4nTrjJxbpbuuJw');

// Step 2: Use sendText( $to, $from, $message ) method to send a message.
$info = $nexmo_sms->sendText( '21655547042', 'IDBureau', 'votre compte est maintenant activee  ' );
// Step 3: Display an overview of the message


// Done!




if(isset($_POST['desactiver']))
{
$client=new clientr();
$client->desactiverclient($_POST["cin"]);
}
require_once ("ajoutclient.php");
?>
