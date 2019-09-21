<?php /* Smarty version Smarty-3.1.8, created on 2017-08-29 08:53:02
         compiled from "tpl/ru/news/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:355819300573a0bd6375396-66301275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f404765fa1f015a5c2639fb27175825c7d0b7e8e' => 
    array (
      0 => 'tpl/ru/news/show.tpl',
      1 => 1503985965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '355819300573a0bd6375396-66301275',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0bd63a2836_86419126',
  'variables' => 
  array (
    'el' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0bd63a2836_86419126')) {function content_573a0bd63a2836_86419126($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Новость'), 0);?>
<h1>Новость</h1><h2><?php echo $_smarty_tpl->tpl_vars['el']->value['nTopic'];?>
</h2><div style="width: 600px; text-align: left;"><small><?php echo $_smarty_tpl->tpl_vars['el']->value['nTS'];?>
</small><?php if ($_smarty_tpl->tpl_vars['el']->value['nAttn']){?>&nbsp;&nbsp;&nbsp;<b style="color: red;">Важно!</b><?php }?><div style="padding: 10px; background-color: #F3F3F3;"><?php echo $_smarty_tpl->tpl_vars['el']->value['nText'];?>
</div></div><br><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>