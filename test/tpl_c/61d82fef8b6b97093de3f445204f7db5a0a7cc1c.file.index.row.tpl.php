<?php /* Smarty version Smarty-3.1.8, created on 2017-08-22 08:24:26
         compiled from "tpl/ru/depo/index.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1226901888599bea3a3ece78-64243630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61d82fef8b6b97093de3f445204f7db5a0a7cc1c' => 
    array (
      0 => 'tpl/ru/depo/index.row.tpl',
      1 => 1503076892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1226901888599bea3a3ece78-64243630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
    'ststrs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_599bea3a452b51_49917157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599bea3a452b51_49917157')) {function content_599bea3a452b51_49917157($_smarty_tpl) {?><td  class='links'><a href="<?php echo tplModuleToLink(array('module'=>'depo/depo'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['dID'];?>
" ><?php echo $_smarty_tpl->tpl_vars['l']->value['pName'];?>
<small><?php echo $_smarty_tpl->tpl_vars['ststrs']->value[$_smarty_tpl->tpl_vars['l']->value['dState']];?>
</small></a></td><td align="center" class=' td-data'><small style='line-height:25px;'><?php echo $_smarty_tpl->tpl_vars['l']->value['dCTS'];?>
</small></td><td align='center' class='image'><i><img src="images/p/<?php echo $_smarty_tpl->tpl_vars['l']->value['cID'];?>
.png" height='25'></i>&nbsp;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['l']->value['cName'];?>
</span></td><td align="center" class='balance'><?php echo _z($_smarty_tpl->tpl_vars['l']->value['dZD'],$_smarty_tpl->tpl_vars['l']->value['dcID'],-1);?>
<small><?php if ($_smarty_tpl->tpl_vars['l']->value['cCurr']=='USD'){?>$<?php }?><?php if ($_smarty_tpl->tpl_vars['l']->value['cCurr']=='RUB'){?>P<?php }?><?php if ($_smarty_tpl->tpl_vars['l']->value['cCurr']=='BTC'){?>Ƀ<?php }?></small></td><td align="center" class='td-lines td-data'><small style='line-height:25px;'><?php echo $_smarty_tpl->tpl_vars['l']->value['dLTS'];?>
</small></td><td align="center" class='balance'><?php echo $_smarty_tpl->tpl_vars['l']->value['dNPer'];?>
 из <?php echo $_smarty_tpl->tpl_vars['l']->value['pNPer'];?>
</td><td align="center" class='balance'><?php echo _z($_smarty_tpl->tpl_vars['l']->value['dZP'],$_smarty_tpl->tpl_vars['l']->value['dcID'],-1);?>
<small><?php if ($_smarty_tpl->tpl_vars['l']->value['cCurr']=='USD'){?>$<?php }?><?php if ($_smarty_tpl->tpl_vars['l']->value['cCurr']=='RUB'){?>P<?php }?><?php if ($_smarty_tpl->tpl_vars['l']->value['cCurr']=='BTC'){?>Ƀ<?php }?></small></td><td align='center' class='td-lines td-data'><small style='line-height:25px;'><?php echo $_smarty_tpl->tpl_vars['l']->value['dNTS'];?>
</small></td><?php }} ?>