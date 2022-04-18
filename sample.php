<?php
require( dirname( __FILE__).'/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = dirname( __FILE__).'/templates';
$smarty->compile_dir = dirname( __FILE__).'/templates_c';

$smarty->assign( 'name', 'Tarou');
$smarty->assign( 'address', 'created by SMARTY and php5 oracle11');

$smarty->assign( 'engine', 'Google');

$data = array(
    "name"=>"Yamada",
    "old"=>"24",
    "address"=>"Tokyo"
    );
$smarty->assign('personaldata', $data);

$smarty->assign('title', '繰り返し処理のテスト');


$smarty->display('sample.tpl');

?>