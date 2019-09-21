<?php /* Smarty version Smarty-3.1.8, created on 2017-08-26 12:00:24
         compiled from "tpl/ru/depo/block.stat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1425587783573a06fb0e1913-03554967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bb28c1628cb9de9517465a76feb2f0402790a5a' => 
    array (
      0 => 'tpl/ru/depo/block.stat.tpl',
      1 => 1503738022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1425587783573a06fb0e1913-03554967',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a06fb1727c0_11071352',
  'variables' => 
  array (
    'stat' => 0,
    'copilka' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a06fb1727c0_11071352')) {function content_573a06fb1727c0_11071352($_smarty_tpl) {?><div class="stata"><div class="wrapper"><div style="text-align:center;"><div class="st1"><p>    <?php echo $_smarty_tpl->tpl_vars['stat']->value['worked'];?>
       </p>Программа работает            </div><div class="st2"><p><?php echo $_smarty_tpl->tpl_vars['stat']->value['users'];?>
</p>Всего участников</div><div class="st3"><p><?php $_smarty_tpl->tpl_vars['copilka'] = new Smarty_variable((sprintf("%.2f",$_smarty_tpl->tpl_vars['stat']->value['zin']))-(sprintf("%.2f",$_smarty_tpl->tpl_vars['stat']->value['zout'])), null, 0);?><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['copilka']->value);?>
 <i class="fa fa-usd"></i></p>Принято средств</div></div></div></div></div><?php }} ?>