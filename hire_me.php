<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_product = $_POST['cf_product'];
$field_description = $_POST['cf_description'];

$mail_to = 'hireme@danelsonrosa.com';
$subject = 'Partner With Me inquiry from '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Product: '.$field_product."\n";
$body_message .= 'Description: '.$field_description;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'hire_me.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please send an email to HireMe@danelsonrosa.com');
		window.location = 'hire_me.html';
	</script>
<?php
}
?>
