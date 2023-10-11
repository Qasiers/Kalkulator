<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
	<style><?php include('log_style.css'); ?></style>
</head>
<body>
<div class="upper">
<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
<fieldset>
	<legend class="log_legend">Logowanie</legend>
		<label class="log" for="id_login">Login: </label><br/>
		<input id="id_login" type="text" name="login" value="<?php out_print($form['login']); ?>" /><br/>
		<label class="pass" for="id_pass">Hasło: </label><br/>
		<input id="id_pass" type="password" name="pass" /><br/>
	<button type="submit">Zaloguj</button>
</fieldset>
</form>	
<?php
if (isset($msg_array)) {
	if (count ($msg_array) > 0) {
		echo '<ol class="login">';
		foreach ($msg_array as $key => $msg) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>
</div>
</body>
</html>
