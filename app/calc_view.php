<?php
require_once dirname(__FILE__)."/../config.php";
$sum = $_REQUEST["sum"];
$proc = $_REQUEST["proc"];
$time = $_REQUEST["time"];
if (!empty($sum) && !empty($time) && !empty($proc)) {
    if (is_numeric($sum) && is_numeric($time) && is_numeric($proc)) {
        if ($sum <= 200000 && $time <= 120 && $proc >= 1) {
            $proc /= 100;
            $ins = ($proc/12)*$time;
            $whole = $sum+($sum*$proc);
            $month = $whole/$time;
            $month = number_format($month,0,","," ");
            $whole = number_format($whole,0,","," ");
            $msg = "Kwota pojedynczej raty: $month<br /> Kwota do spłaty: $whole<br />";
            $err = "'no_err'";
            $proc *= 100;
        } else if ($proc < 1 && $proc > 0) {
            $ins = ($proc/12)*$time;
            $whole = $sum+($sum*$proc);
            $month = $whole/$time;
            $month = number_format($month,0,","," ");
            $whole = number_format($whole,0,","," ");
            $msg = "Kwota pojedynczej raty: $month<br /> Kwota do spłaty: $whole<br />";
            $err = "'no_err'";
            $proc *= 100;
        } else {
            $msg = "Podano nieprawidłową wartość.";
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
