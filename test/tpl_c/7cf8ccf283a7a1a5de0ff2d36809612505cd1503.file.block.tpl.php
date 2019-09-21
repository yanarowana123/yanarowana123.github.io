<?php /* Smarty version Smarty-3.1.8, created on 2017-08-16 12:45:31
         compiled from "tpl/ru/review/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1743159911573a06fb183e36-29046065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cf8ccf283a7a1a5de0ff2d36809612505cd1503' => 
    array (
      0 => 'tpl/ru/review/block.tpl',
      1 => 1502861701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1743159911573a06fb183e36-29046065',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a06fb1c6921_06185196',
  'variables' => 
  array (
    'list' => 0,
    '_cfg' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a06fb1c6921_06185196')) {function content_573a06fb1c6921_06185196($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/c/ct27347/public_html/smarty3/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Review_InBlock']==1){?><?php $_smarty_tpl->tpl_vars['l'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['list']->value), null, 0);?><li><p><?php echo smarty_modifier_truncate(nl2br($_smarty_tpl->tpl_vars['l']->value['oText']),100);?>
</p><span><?php echo $_smarty_tpl->tpl_vars['l']->value['uLogin'];?>
</span></li><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['l']->key;
?><li><p><?php echo smarty_modifier_truncate(nl2br($_smarty_tpl->tpl_vars['l']->value['oText']),100);?>
</p><span><?php echo $_smarty_tpl->tpl_vars['l']->value['uLogin'];?>
</span></li><?php } ?><?php }?><?php }?><li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis labore necessitatibus, modi iusto laboriosam!</p><span>Username</span></li><li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis labore necessitatibus, modi iusto laboriosam!</p><span>Username</span></li><li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis labore necessitatibus, modi iusto laboriosam!</p><span>Username</span></li><li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis labore necessitatibus, modi iusto laboriosam!</p><span>Username</span></li><li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis labore necessitatibus, modi iusto laboriosam!</p><span>Username</span></li><li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis labore necessitatibus, modi iusto laboriosam!</p><span>Username</span></li><li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis labore necessitatibus, modi iusto laboriosam!</p><span>Username</span></li><?php }} ?>