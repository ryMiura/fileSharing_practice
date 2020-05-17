<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-16 05:55:01
  from '/Applications/MAMP/htdocs/fileSharing/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebf803549e775_26786411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5adf4a1b214ec760b98b7149b1f9070e22984fbb' => 
    array (
      0 => '/Applications/MAMP/htdocs/fileSharing/templates/register.tpl',
      1 => 1589608467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebf803549e775_26786411 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ユーザー登録完了画面</title>
  </head>
  <body>
    <?php if ($_smarty_tpl->tpl_vars['e']->value) {?>
       <p><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</p>
       <a href = "signup.php">戻る</a>
    <?php } else { ?>
      <p>会員登録が完了しました</p>
      <a href="logon.html">ログイン画面へ</a>
    <?php }?>


  </body>
</html>
<?php }
}
