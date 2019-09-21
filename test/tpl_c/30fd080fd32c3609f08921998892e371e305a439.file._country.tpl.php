<?php /* Smarty version Smarty-3.1.8, created on 2019-09-04 09:26:09
         compiled from "tpl/en/_country.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24096236759a064fbc0ca17-53269801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30fd080fd32c3609f08921998892e371e305a439' => 
    array (
      0 => 'tpl/en/_country.tpl',
      1 => 1567570426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24096236759a064fbc0ca17-53269801',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59a064fbc20958_78679455',
  'variables' => 
  array (
    'ip' => 0,
    'c' => 0,
    'countries' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a064fbc20958_78679455')) {function content_59a064fbc20958_78679455($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("geoip2/countries.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable(giGetCountry($_smarty_tpl->tpl_vars['ip']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['c']->value=='AA'){?>Localhost<?php }else{ ?><img src="images/flags/<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
.png" width="15" height="10"> <?php echo $_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->tpl_vars['c']->value];?>
<?php }?><?php }} ?>