<?php
require_once dirname(__FILE__).'/../../config.php';

function getLogin(&$form){
	$form['login'] = isset ($_REQUEST['login']) ? $_REQUEST['login'] : null;
	$form['pass'] = isset ($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
}

function isLoginRight(&$form,&$msg_array){
	if (!(isset($form['login']) && isset($form['pass']))) {
		return false;
	}
	if ($form['login'] == "") {
		$msg_array[] = 'Nie podano loginu.';
	}
	if ($form['pass'] == "") {
		$msg_array[] = 'Nie podano hasła.';
	}
	if (count ( $msg_array ) > 0) {
		return false;
	}
	if ($form['login'] == "admin" && $form['pass'] == "admin") {
		session_start();
		$_SESSION['role'] = 'admin';
		return true;
	}
	if ($form['login'] == "user" && $form['pass'] == "user") {
		session_start();
		$_SESSION['role'] = 'user';
		return true;
	}
	$msg_array[] = 'Niepoprawny login lub hasło';
	return false; 
}

$form = array();
$msg_array = array();
getLogin($form);

if (!isLoginRight($form,$msg_array)) {
	include _ROOT_PATH.'/app/security/login_view.php';
} else { 
	header("Location: "._APP_URL);
}