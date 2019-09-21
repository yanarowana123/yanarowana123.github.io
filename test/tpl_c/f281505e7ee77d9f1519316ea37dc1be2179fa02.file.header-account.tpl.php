<?php /* Smarty version Smarty-3.1.8, created on 2019-09-04 09:35:17
         compiled from "tpl/ru/header-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:520020657573a0919324165-29404207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f281505e7ee77d9f1519316ea37dc1be2179fa02' => 
    array (
      0 => 'tpl/ru/header-account.tpl',
      1 => 1567570430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '520020657573a0919324165-29404207',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a091945fa05_74317537',
  'variables' => 
  array (
    'root_url' => 0,
    'title' => 0,
    '_cfg' => 0,
    'perc_json' => 0,
    'perc_calendar' => 0,
    'user' => 0,
    'tpl_module' => 0,
    'tpl_errors' => 0,
    'cmin' => 0,
    'cmax' => 0,
    'cplan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a091945fa05_74317537')) {function content_573a091945fa05_74317537($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/c/cg42021/public_html/smarty3/plugins/modifier.replace.php';
?>
<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8" /><base href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
" /><title><?php if ($_smarty_tpl->tpl_vars['title']->value){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | <?php }?><?php echo $_smarty_tpl->tpl_vars['_cfg']->value['Sys_SiteName'];?>
</title><link rel="shortcut icon" href="images/favicon.png"><link href="css1/bootstrap.min.css" rel="stylesheet" /><link href="css1/input.css" rel="stylesheet" type="text/css"/><link href="css1/jquery.bxslider.css" rel="stylesheet" type="text/css"/><link href="css1/style.css" rel="stylesheet" type="text/css"/><link href="css1/fontello.css" rel="stylesheet" type="text/css"/><link href="css1/account.css" rel="stylesheet" type="text/css"/><script src="js/jquery.min.js"></script><script src="js/jquery.bxslider.min.js"></script><script src="js/scripts.js"></script><script src="https://code.highcharts.com/highcharts.js"></script><script src="https://code.highcharts.com/modules/exporting.js"></script><script>$(function(){data_percent =<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['perc_json']->value,'&quot;','');?>
;data_percent1 =<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['perc_calendar']->value,'&quot;','');?>
;});</script><script src="js/theme.js" type="text/javascript"></script><script src="js/sand-signika-ru.js"></script><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><link href='https://fonts.googleapis.com/css?family=PT+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'></head><body><div class="left-panel"><div class="logo-account"><a href=""></a></div><ul class="user-menu"><li class="cabinet"><a href="cabinet"><i class="demo-icon icon-user-1"></i>Кабинет</a></li><li class="balance "><a href="operations"><i class="demo-icon icon-clock-2"></i>Операции</a></li><li class="depo "><a href="deposits"><i class="demo-icon icon-clipboard"></i>Депозиты</a></li><li class="refsys "><a href="refsys"><i class="demo-icon icon-group"></i>Реф. система</a></li><li class="balance_wallets "><a href="balance/wallets"><i class="demo-icon icon-credit-card"></i>Pеквизиты</a></li><li class="account "><a href="account"><i class="demo-icon icon-cogs"></i> Настройки </a></li></ul></div><div class="wrapper wrapper-cabinet"><section class="header"><div class="header-top"><div class="container-fluid"><div class="row"><div class="col-md-12"><div class="user-panel"><i></i><span><?php echo $_smarty_tpl->tpl_vars['user']->value['aName'];?>
</span><small><?php echo $_smarty_tpl->tpl_vars['user']->value['uMail'];?>
</small></div><ul class='menu'><li><a href="/home" <?php if ($_smarty_tpl->tpl_vars['tpl_module']->value=='index'){?> class="active"<?php }?>>Главная</a></li><li><a href="/rules" <?php if ($_smarty_tpl->tpl_vars['tpl_module']->value=='rules'){?> class="active"<?php }?>>Правила</a></li><li><a href="/faq" <?php if ($_smarty_tpl->tpl_vars['tpl_module']->value=='faq'){?> class="active"<?php }?>>Faq</a></li><li class='noborder'><a href="/support" <?php if ($_smarty_tpl->tpl_vars['tpl_module']->value=='message/support'){?> class="active"<?php }?>>Контакты</a></li><li class="other other-1"><a href="/login?out"><i class="demo-icon icon-lock"></i> Выход</a></li></ul></div></div></div></div><div class="header-preview"><div class="container-fluid"><div class="row"><div class="col-md-5"><?php echo $_smarty_tpl->getSubTemplate ('balance/bal-oper.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="col-md-7"><div class="blocks blocks1"><a href="operation?add=CASHIN" class="btn-cabinet"><i class="demo-icon icon-export"></i>Пополнить баланс</a><a href="operation?add=CASHOUT" class="btn-cabinet"><i class="demo-icon icon-retweet"></i>Вывод средств</a><a href="deposit?add" class="btn-cabinet"><i class="demo-icon icon-plus"></i>Создать депозит</a></div></div></div></div></div></section><?php if (count($_smarty_tpl->tpl_vars['tpl_errors']->value)){?><section class="massage-section massage-section1"><ul class="error_message" ><?php if ($_GET['add']=='CASHIN'){?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='psys_empty'){?><li>выберите плат. систему</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='sum_wrong'){?><li>Минимальная сумма вклада 10$</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='limit_exceeded'){?><li>Limit exceeded</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='pin_wrong'){?><li>Wrong code</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='plan_wrong'){?><li>Ошибка выбора плана</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='compnd_wrong'){?><li>Ошибочное значение (<?php echo $_smarty_tpl->tpl_vars['cmin']->value;?>
..<?php echo $_smarty_tpl->tpl_vars['cmax']->value;?>
)</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='sum_min'){?><li>Минимальная сумма вклада 10$</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='compnd_wrong1'){?><li>Ошибочное значение для плана '<?php echo $_smarty_tpl->tpl_vars['cplan']->value;?>
'</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='oper_disabled'){?><li>Operation disabled</li><?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='psys_empty'){?><li>Ошибка плат. системы</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='sum_wrong'){?><li>Минимальная сумма вывода 2$</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='limit_exceeded'){?><li>Limit exceeded</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='pin_wrong'){?><li>Wrong code</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='low_bal1'){?><li>Insufficient funds</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='oper_disabled'){?><li>Операция отключена</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='sum_max'){?><li>Максимальная сумма вывода привышена</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='sum_min'){?><li>Минимальная сумма вывода 2$</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['add'][0]=='wallet_not_defined'){?><li>Кошелек не найден</li><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['depo/depo_frm'][0]=='compnd_wrong'){?><li>Wrong value</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['depo/depo_frm'][0]=='sum_empty'){?><li>Input amount</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['depo/depo_frm'][0]=='sum_wrong'){?><li>Wrong amount</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['depo/depo_frm'][0]=='low_bal1'){?><li>Insufficient funds</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['depo/depo_frm'][0]=='cant_add'){?><li>Can`t add</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['depo/depo_frm'][0]=='cant_sub'){?><li>Can`t sub</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['depo/depo_frm'][0]=='plan_not_found'){?><li>No suitable plan</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['depo/depo_frm'][0]=='oper_disabled'){?><li>Operation disabled</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['new'][0]=='psys_empty'){?><li>Выберите платежную систему</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['new'][0]=='psys_wrong'){?><li>Ошибка платежной системы</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['new'][0]=='sum_wrong'){?><li>Ошибка суммы вклада</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['new'][0]=='sum_empty'){?><li>Введите сумму</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['new'][0]=='plan_wrong'){?><li>Ошибка выбора плана</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['new'][0]=='compnd_wrong'){?><li>Ошибочное значение (<?php echo $_smarty_tpl->tpl_vars['cmin']->value;?>
..<?php echo $_smarty_tpl->tpl_vars['cmax']->value;?>
)</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['new'][0]=='compnd_wrong1'){?><li>Ошибочное значение для плана '<?php echo $_smarty_tpl->tpl_vars['cplan']->value;?>
'</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['new'][0]=='oper_disabled'){?><li>Операция закрыта</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['new'][0]=='low_bal1'){?><li>Недостаток средств</li><?php }?></ul></section><?php }?>

<?php }} ?>