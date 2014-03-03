<?php /** Captcha Form **/

?>

<form method="post" id="captcha_form">
	<?php echo recaptcha_get_html($publickey); ?>
<input type="submit" id="submit_captcha" />