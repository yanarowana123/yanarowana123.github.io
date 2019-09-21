
{strip}

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <base href="{$root_url}" />
  <title>{if $title}{$title} | {/if}{$_cfg.Sys_SiteName}</title>
  <link rel="shortcut icon" href="images/favicon.png">
  <link href="css1/bootstrap.min.css" rel="stylesheet" />
  <link href="css1/input.css" rel="stylesheet" type="text/css"/>
  <link href="css1/jquery.bxslider.css" rel="stylesheet" type="text/css"/>
  <link href="css1/style.css" rel="stylesheet" type="text/css"/>
  <link href="css1/fontello.css" rel="stylesheet" type="text/css"/>
  <link href="css1/account.css" rel="stylesheet" type="text/css"/>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/scripts.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script>
        $(function(){
             data_percent ={$perc_json|replace:'&quot;':''};
             data_percent1 ={$perc_calendar|replace:'&quot;':''};

        });
    </script>
  
  
    <script src="js/theme.js" type="text/javascript"></script>
    <script src="js/sand-signika-ru.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=PT+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="left-panel">
  <div class="logo-account">
    <a href=""></a>
  </div>
  <ul class="user-menu">
      <li class="cabinet"><a href="cabinet"><i class="demo-icon icon-user-1"></i>Кабинет</a></li>
      <li class="balance "><a href="operations"><i class="demo-icon icon-clock-2"></i>Операции</a></li>
      <li class="depo "><a href="deposits"><i class="demo-icon icon-clipboard"></i>Депозиты</a></li>
      <li class="refsys "><a href="refsys"><i class="demo-icon icon-group"></i>Реф. система</a></li>
      <li class="balance_wallets "><a href="balance/wallets"><i class="demo-icon icon-credit-card"></i>Pеквизиты</a></li>
     
      <li class="account "><a href="account"><i class="demo-icon icon-cogs"></i> Настройки </a></li>
  </ul>


</div>
<div class="wrapper wrapper-cabinet">
  <section class="header">
    <div class="header-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="user-panel">
              <i></i>
              <span>{$user.aName}</span>
              <small>{$user.uMail}</small>
            </div>
            <ul class='menu'>
                <li><a href="/home" {if $tpl_module == 'index'} class="active"{/if}>Главная</a></li>
                <li><a href="/rules" {if $tpl_module == 'rules'} class="active"{/if}>Правила</a></li>
                <li><a href="/faq" {if $tpl_module == 'faq'} class="active"{/if}>Faq</a></li>
                <li class='noborder'><a href="/support" {if $tpl_module == 'message/support'} class="active"{/if}>Контакты</a></li>
                <li class="other other-1"><a href="/login?out"><i class="demo-icon icon-lock"></i> Выход</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header-preview">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            {include file='balance/bal-oper.tpl'}

          </div>
          <div class="col-md-7">
            <div class="blocks blocks1">
              <a href="operation?add=CASHIN" class="btn-cabinet"><i class="demo-icon icon-export"></i>Пополнить баланс</a>
              <a href="operation?add=CASHOUT" class="btn-cabinet"><i class="demo-icon icon-retweet"></i>Вывод средств</a>
              <a href="deposit?add" class="btn-cabinet"><i class="demo-icon icon-plus"></i>Создать депозит</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



{if $tpl_errors|count}
    <section class="massage-section massage-section1">



                    <ul class="error_message" >

                    {if $smarty.get['add']=='CASHIN'}
                        {if $tpl_errors['add'][0]=='psys_empty'}<li>выберите плат. систему</li>{/if}
                          {if $tpl_errors['add'][0]=='sum_wrong'}<li>Минимальная сумма вклада 10$</li>{/if}
                          {if $tpl_errors['add'][0]=='limit_exceeded'}<li>Limit exceeded</li>{/if}
                          {if $tpl_errors['add'][0]=='pin_wrong'}<li>Wrong code</li>{/if}
                          {if $tpl_errors['add'][0]=='plan_wrong'}<li>Ошибка выбора плана</li>{/if}
                          {if $tpl_errors['add'][0]=='compnd_wrong'}<li>Ошибочное значение ({$cmin}..{$cmax})</li>{/if}
                          {if $tpl_errors['add'][0]=='sum_min'}<li>Минимальная сумма вклада 10$</li>{/if}
                          {if $tpl_errors['add'][0]=='compnd_wrong1'}<li>Ошибочное значение для плана '{$cplan}'</li>{/if}
                          {if $tpl_errors['add'][0]=='oper_disabled'}<li>Operation disabled</li>{/if}
                      {else}
                        {if $tpl_errors['add'][0]=='psys_empty'}<li>Ошибка плат. системы</li>{/if}
                            {if $tpl_errors['add'][0]=='sum_wrong'}<li>Минимальная сумма вывода 2$</li>{/if}
                            {if $tpl_errors['add'][0]=='limit_exceeded'}<li>Limit exceeded</li>{/if}
                            {if $tpl_errors['add'][0]=='pin_wrong'}<li>Wrong code</li>{/if}
                            {if $tpl_errors['add'][0]=='low_bal1'}<li>Insufficient funds</li>{/if}
                            {if $tpl_errors['add'][0]=='oper_disabled'}<li>Операция отключена</li>{/if}
                            {if $tpl_errors['add'][0]=='sum_max'}<li>Максимальная сумма вывода привышена</li>{/if}
                            {if $tpl_errors['add'][0]=='sum_min'}<li>Минимальная сумма вывода 2$</li>{/if}
                            {if $tpl_errors['add'][0]=='wallet_not_defined'}<li>Кошелек не найден</li>{/if}
                      {/if}





                      {if $tpl_errors['depo/depo_frm'][0]=='compnd_wrong'}<li>Wrong value</li>{/if}
                      {if $tpl_errors['depo/depo_frm'][0]=='sum_empty'}<li>Input amount</li>{/if}
                      {if $tpl_errors['depo/depo_frm'][0]=='sum_wrong'}<li>Wrong amount</li>{/if}
                      {if $tpl_errors['depo/depo_frm'][0]=='low_bal1'}<li>Insufficient funds</li>{/if}
                      {if $tpl_errors['depo/depo_frm'][0]=='cant_add'}<li>Can`t add</li>{/if}
                      {if $tpl_errors['depo/depo_frm'][0]=='cant_sub'}<li>Can`t sub</li>{/if}
                      {if $tpl_errors['depo/depo_frm'][0]=='plan_not_found'}<li>No suitable plan</li>{/if}
                      {if $tpl_errors['depo/depo_frm'][0]=='oper_disabled'}<li>Operation disabled</li>{/if}





                    {if $tpl_errors['new'][0]=='psys_empty'}<li>Выберите платежную систему</li>{/if}
                    {if $tpl_errors['new'][0]=='psys_wrong'}<li>Ошибка платежной системы</li>{/if}
                    {if $tpl_errors['new'][0]=='sum_wrong'}<li>Ошибка суммы вклада</li>{/if}
                    {if $tpl_errors['new'][0]=='sum_empty'}<li>Введите сумму</li>{/if}
                    {if $tpl_errors['new'][0]=='plan_wrong'}<li>Ошибка выбора плана</li>{/if}
                    {if $tpl_errors['new'][0]=='compnd_wrong'}<li>Ошибочное значение ({$cmin}..{$cmax})</li>{/if}
                    {if $tpl_errors['new'][0]=='compnd_wrong1'}<li>Ошибочное значение для плана '{$cplan}'</li>{/if}
                    {if $tpl_errors['new'][0]=='oper_disabled'}<li>Операция закрыта</li>{/if}
                    {if $tpl_errors['new'][0]=='low_bal1'}<li>Недостаток средств</li>{/if}
                </ul>

  </section>
{/if}


















{/strip}

