<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getValues(&$form) {
	if (isset($_REQUEST['a'])) {
		$form['a'] = $_REQUEST['a'];
	} else {
		$form['a'] = null;
	}
	if (isset($_REQUEST['b'])) {
		$form['b'] = $_REQUEST['b'];
	} else {
		$form['b'] = null;
	}
	if (isset($_REQUEST['op'])) {
		$form['op'] = $_REQUEST['op'];
	} else {
		$form['op'] = null;
	}
}

function isAllRight(&$form,&$array_msg){

	if ( ! (isset($form['a']) && isset($form['b']) && isset($form['op']) ))	{
		return false;
	}
	if ( $form['a'] == "") $array_msg [] = 'Nie podano pierwszej liczby.';
	if ( $form['b'] == "") $array_msg [] = 'Nie podano drugiej liczby';
	if ( count($array_msg)==0 ) {
		if (! is_numeric( $form['a'] )) $array_msg [] = 'Pierwsza liczba nie jest liczbą całkowitą';
		if (! is_numeric( $form['b'] )) $array_msg [] = 'Druga liczba nie jest całkowitą';
	}
	if (count($array_msg) > 0) { 
		return false;
	} else {
		return true; 
	}
}

function operation(&$form,&$array_msg,&$result){
	$form['a'] = intval($form['a']);
	$form['b'] = intval($form['b']);
	switch ($form['op']) {
	case 'minus' :
		$result = $form['a'] - $form['b'];
		$form['op_name'] = '-';
		break;
	case 'times' :
		$result = $form['a'] * $form['b'];
		$form['op_name'] = '*';
		break;
	case 'div' :
		$result = $form['a'] / $form['b'];
		$form['op_name'] = '/';
		break;
	default :
		$result = $form['a'] + $form['b'];
		$form['op_name'] = '+';
		break;
	}
}

$form = null;
$array_msg = array();
$result = null;
	
getValues($form);
if ( isAllRight($form,$array_msg) ){
	operation($form,$array_msg,$result);
}

$smarty = new Smarty();
$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator');
$smarty->assign('page_description','Kalkulator oparty na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('array_msg',$array_msg);
$smarty->display(_ROOT_PATH.'/app/calc.html');