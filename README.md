Q_Mail
======

$mail = new Q_Mail(new Q_Mail_Transport_Mail());
$mail->setFrom('test@localhost');
$mail->setTo('test@localhost');
$mail->setSubject('test');
$mail->setBody('text');
$mail->send();