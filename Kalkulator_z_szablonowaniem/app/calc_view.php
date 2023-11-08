<?php
include _ROOT_PATH.'/templates/top.php';
?>
<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post">
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
</form>	
<?php
if (isset($msg_array)) {
	if (count($msg_array) > 0) {
		echo '<section class="err">Uwagi:<br/><ol class="calc">';
		foreach ($msg_array as $key => $msg) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol></section>';
	}
}
?>
<?php if (isset($result)) {
	echo '<p class="result">Wynik: '.$result.'</p>';
} ?>

<?php
include _ROOT_PATH.'/templates/bottom.php';
?>