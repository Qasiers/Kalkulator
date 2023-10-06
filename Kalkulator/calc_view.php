<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator</title>
	<style><?php include('calc_style.css'); ?></style>
</head>
<body>
<div class="upper">
<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post">
<fieldset>
	<legend class="calc_legend">Kalkulator</legend>
		<label for="id_a">Pierwsza liczba: </label><br/>
		<input id="id_a" type="text" name="a" value="<?php out_print($a) ?>" /><br/>
		<label for="id_op">Działanie: </label><br/>
		<select name="op">	
			<option value="add">&plus;</option>
			<option value="sub">&minus;</option>
			<option value="times">&times;</option>
			<option value="div">&divide;</option>
		</select><br/>
		<label for="id_b">Druga liczba: </label><br/>
		<input id="id_b" type="text" name="b" value="<?php out_print($b) ?>" /><br/>
	<button type="submit">Oblicz</button>
</fieldset>
</form>	
<?php
if (isset($msg_array)) {
	if (count($msg_array) > 0) {
		echo '<ol class="calc">';
		foreach ($msg_array as $key => $msg) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)) {
	echo '<div class="lower">Wynik: '.$result.'</div>';
} ?>
</div>
</body>
</html>