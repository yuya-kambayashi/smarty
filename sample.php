<?php
require( dirname( __FILE__).'/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = dirname( __FILE__).'/templates';
$smarty->compile_dir = dirname( __FILE__).'/templates_c';

$smarty->assign( 'name', 'Tarou');
$smarty->assign( 'address', 'created by SMARTY and php5 oracle11');

$smarty->assign( 'engine', 'Google');

$smarty->display('sample.tpl');

?>