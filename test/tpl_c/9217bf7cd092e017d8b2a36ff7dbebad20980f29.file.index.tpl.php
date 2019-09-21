<?php /* Smarty version Smarty-3.1.8, created on 2017-08-30 14:59:07
         compiled from "tpl/ru/system/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146563926573991a8e17a96-07626896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9217bf7cd092e017d8b2a36ff7dbebad20980f29' => 
    array (
      0 => 'tpl/ru/system/index.tpl',
      1 => 1503643893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146563926573991a8e17a96-07626896',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573991a94352b4_47124672',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573991a94352b4_47124672')) {function content_573991a94352b4_47124672($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Interface'), 0);?>
<h1>Select interface</h1><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('lang'=>array('S','Language',0,array('en'=>'English','ru'=>'Русский'),'default'=>$_SESSION['_lang'])),'btn_text'=>'Select'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>