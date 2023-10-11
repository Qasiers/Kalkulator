<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Chroniona strona</title>
	<style><?php include 'calc_style.css'; ?></style>
</head>
<body>
<div class="upper">
	<a href="<?php print(_APP_ROOT); ?>/app/calc.php">Powrót do kalkulatora</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php">Wyloguj</a>
</div>
<div class="upper">
	<p>To jest inna chroniona strona aplikacji internetowej.</p>
</div>	
</body>
</html>