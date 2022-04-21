<?php

require("../../smarty/libs/Smarty.class.php");
$smarty = new Smarty();
$smarty->template_dir = "./templates";
$smarty->compile_dir = "./templates_c";
$smarty->cache_dir = "./cache";
$smarty->config_dir = "./configs";

$smarty->assign( 'name', 'Tarouaaaa');
$smarty->assign( 'address', 'created by SMARTY and php5 oracle11');

$smarty->assign( 'engine', 'Google');

$data = array(
    "name"=>"Yamada",
    "old"=>"24",
    "address"=>"Tokyo"
    );
$smarty->assign('personaldata', $data);

$smarty->assign('title', '繰り返し処理のテストaaa');


$smarty->display('index.tpl');

?>
