<?php
require 'SMTPMailer.php';
$mail = new SMTPMailer();
$mail->addTo('aziz.sayeb@esprit.tn');
$mail->Subject('Pictures for you');
$mail->Body(
    '<h3>Some Images</h3>
    I send you some pictures.<br>
    Greetings!'
);
$mail->File('images.jpg');

if ($mail->Send()) echo 'Mail sent successfully';
else               echo 'Mail failure';
header('Location: index.html');