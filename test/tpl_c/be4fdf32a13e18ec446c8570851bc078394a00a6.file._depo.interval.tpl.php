<?php /* Smarty version Smarty-3.1.8, created on 2019-09-13 23:11:24
         compiled from "tpl/ru/depo/_depo.interval.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1743029021573a0ae2aa2f34-45985741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be4fdf32a13e18ec446c8570851bc078394a00a6' => 
    array (
      0 => 'tpl/ru/depo/_depo.interval.tpl',
      1 => 1568373373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1743029021573a0ae2aa2f34-45985741',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0ae2ab74c1_97199717',
  'variables' => 
  array (
    '_cfg' => 0,
    'nextdepoleft' => 0,
    'nextdepotime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0ae2ab74c1_97199717')) {function content_573a0ae2ab74c1_97199717($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Depo_Interval']>0){?><p class="info"><?php if ($_smarty_tpl->tpl_vars['nextdepoleft']->value>0){?>Estimated time of deposit activation - <b><?php echo $_smarty_tpl->tpl_vars['nextdepotime']->value;?>
</b><br>(approximately <?php echo $_smarty_tpl->tpl_vars['nextdepoleft']->value;?>
 min.)<?php }else{ ?>Your deposit will be activated <b>immediately</b><?php }?></p><?php }?><?php }} ?>