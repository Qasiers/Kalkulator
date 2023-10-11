<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

function getValues(&$a,&$b,&$op){
	if (isset($_REQUEST['a'])) {
		$a = $_REQUEST['a'];
	} else {
		$a = null;
	}
	if (isset($_REQUEST['b'])) {
		$b = $_REQUEST['b'];
	} else {
		$b = null;
	}
	if (isset($_REQUEST['op'])) {
		$op = $_REQUEST['op'];
	} else {
		$op = null;
	}
}

function isAllRight(&$a,&$b,&$op,&$msg_array){
	if (!(isset($a) && isset($b) && isset($op))) {
		return false;
	}
	if ($a == "") {
		$msg_array[] = 'Nie podano pierwszej liczby';
	} else 	if (!is_numeric($a)) {
		$msg_array[] = 'Pierwsza liczba nie jest liczbą całkowitą';
	}
	if ($b == "") {
		$msg_array[] = 'Nie podano drugiej liczby';
	} else 	if (!is_numeric($b)) {
		$msg_array[] = 'Druga liczba nie jest liczbą całkowitą';
	}	
	if (count ($msg_array) != 0) {
		return false;
	}
	if (count ($msg_array) != 0) {
		return false;
	} else  {
		return true;
	}
}

function operation(&$a,&$b,&$op,&$msg_array,&$result){
	global $role;
	$a = intval($a);
	$b = intval($b);
	switch ($op) {
		case 'div' :
			if ($role == 'admin'){
				$result = $a / $b;
			} else {
				$msg_array[] = 'Tylko administrator może dzielić!';
			}
			break;
		case 'times' :
			if ($role == 'admin'){
				$result = $a * $b;
			} else {
				$msg_array[] = 'Tylko administrator może mnożyć!';
			}
			break;
		case 'sub' :
			$result = $a - $b;
			break;
		default :
			$result = $a + $b;
			break;
	}
}

$result = null;
$msg_array = array();
getValues($a,$b,$op);
if (isAllRight($a,$b,$op,$msg_array)) {
	operation($a,$b,$op,$msg_array,$result);
}
include 'calc_view.php';
