

  {if _uid()}
          {include file='menu.tpl'
    class='mainMenu'
    elements=[
      ['cabinet', 'Аккаунт'],
      ['balance/oper', 'Инвестировать','params'=>'add=CASHIN'],
      ['depo', 'Мои депозиты','icon'=>''],
      ['balance/oper', 'вывод средств','params'=>'add=CASHOUT'],
      ['balance', 'Операции', 'count'=>$count_opers,'icon'=>''],
      ['balance/wallets', 'Платежные реквизиты','icon'=>''],
      ['refsys', 'Партнерская программа','count'=>$count_tickets,'icon'=>''],
      ['account', 'Настройки','icon'=>'']



      ]
    }
  {/if}

