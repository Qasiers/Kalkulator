<?php
require_once dirname(__FILE__)."/../config.php";
$sum = $_REQUEST["sum"];
$proc = 0.02;
$time = $_REQUEST["time"];
if (!empty($sum) && !empty($time)) {
    if (is_numeric($sum) && is_numeric($time)) {
        if ($sum <= 200000 && $time <= 120) {
            $ins = ($proc/12)*$time;
            $whole = $sum+($sum*$proc);
            $month = $whole/$time;
            $month = number_format($month,0,","," ");
            $whole = number_format($whole,0,","," ");
            $msg = "Kwota pojedynczej raty: $month<br /> Kwota do spłaty: $whole<br />";
            $err = "'no_err'";
        } else {
            $msg = "Podano za dużą wartość.";
            $err = "'err'";
        }
    } else {
        $msg = "Dane wprowadź w postaci liczb.";
        $err = "'err'";
    }
} else {
    $msg = "Jedno lub więcej pół jest nieuzupełnione.";
    $err = "'err'";
}
include "calc_view.php";
