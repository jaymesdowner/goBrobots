<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'jaymesdowner@gmail.com';
$subject = 'Contact Form | gobrobots.com';

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Nice Job! One of the Bots will contact you soon.');
		window.location = 'bots.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Oooops. Looks like you messed up. Try again?');
		window.location = 'bots.html';
	</script>
<?php
}
?>