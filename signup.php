<?php

//エラーメッセージ

require_once("smarty/libs/Smarty.class.php");
$smarty = new Smarty();

$smarty->template_dir = './templates/';
$smarty->compile_dir = './templates_c/';


$smarty->display("signup.tpl");


require_once("db_init.php");
 ?>
