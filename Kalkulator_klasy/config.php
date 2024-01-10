<?php
require_once 'config.class.php';

$conf = new config();

$conf->server_name = 'localhost:80';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/klasa_V/2023.12.01/zadanie';
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->root_path = dirname(__FILE__);
?>