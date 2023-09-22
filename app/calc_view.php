<?php require_once dirname(__FILE__) ."/../config.php";?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8" />
<title>Kalkulator</title>
<style>
    * {
        line-height: 2;
    }
    input, button, section {
        line-height: 1 !important;
    }
    .no_err {
        background-color: #66B032;
        width: max-content;
        padding: 2%;
        border-radius: 10px;
    }
    .err {
        background-color: #FE2712;
        width: max-content;
        padding: 2%;
        border-radius: 10px;
    }
</style>
</head>
<body>
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
    <label id="names" for="id_sum">Kwota kredytu</label>
    <input id="id_sum" name="sum" value="<?php isset($sum)?print($sum):''; ?>" /><br />
    <label id="names" for="id_time">Okres spłaty (w miesiącach)</label>
    <input id="id_time" name="time" value="<?php isset($time)?print($time):''; ?>" /><br />
    <button type="submit">Oblicz</button>
</form>
    <section class=<?php isset($err)?print($err):"";?>>
        <?php isset($msg)?print($msg):""?>
    </section>
</body>
</html>
