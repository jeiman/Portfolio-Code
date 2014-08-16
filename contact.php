<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'jeiman@jeimanjeya.com';
$subject = 'Message from a visitor viewing your website '.$field_name;

$body_message = 'From: '.$field_name."\n\n";
$body_message .= 'E-mail: '.$field_email."\n\n";
$body_message .= 'Message: '."\n\n".$field_message."\n";

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you as soon as possible.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to jeiman@jeimanjeya.com');
		window.location = 'index.html';
	</script>
<?php
}
?>