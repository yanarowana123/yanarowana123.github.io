{strip}
{include file='header3.tpl' title=''}
<div id="cabin">
        <div class="mycab left-cb">
            <div class="mycab-menu">		
                <ul>
                    <li><a href="/cabinet">Кабинет</a></li>
                    <li><a href="/deposits">Депозиты</a></li>
                    <li><a href="/operations" style="color:#ffad15; border: 1px solid #f7a610">Операции</a></li>
                    <li><a href="/refsys">Партнеры</a></li>
                    <li><a href="/balance/wallets">Кошельки</a></li>
                    <li><a href="/account" style="margin-right:0px;">Настройки</a></li>
                </ul>
            </div>	
             <!--<div id="m-con">
                <div class="for">
                    <a href="#" target="_blank">MMG</a>    
                </div>
                <div class="for">
                    <a href="#" target="_blank">MMGP</a>     
                </div>
                <div class="for">
                    <a href="#" target="_blank">TG</a>    
                </div>
            </div>-->
        </div>
        <div class="mycab right-cb">
            {include file='balance/_statuses.tpl'}
        {if $el}

	<h1>{$op_names[$el.oOper]}</h1>
	{if isset($smarty.get.check)}
	
		<p class="info">
			Waiting for payment confirmation...
		</p>
	
	{else}
	
		{if ($el.oState <= 1)}
		
			{$opc = (($el.oOper != 'CASHIN') or $dfields)}
			{if $opc}
				<p class="info">
					Operation NOT confirmed by you!
				</p>
			{/if}
		
		{elseif $el.oState == 2}
		
			<p class="info">
				The operation will be processed by the Administrator shortly
			</p>
		
		{/if}

		{$b = []}
		{if $el.oState <= 2}
			{$b['cancel'] = 'Cancel'}
		{/if}
		{if $el.oState >= 5}
			{$b['del'] = 'Delete'}
		{/if}
<div id="infom">
		{include file='balance/_oper.tpl' bt=valueIf($opc, 'Confirm', ' ') b=$b
			errors=[
				'oper_not_found'=>'wrong state',
				'oper_disabled'=>'operation disabled',
				'low_bal1'=>'insufficient funds',
				'data_date_wrong'=>'wrong operation date',
				'data_sum_wrong'=>'wrong amount',
				'data_batch_wrong'=>'batch-number empty',
				'batch_exists'=>'operation with batch-number already exists'
            
			]
		}
	{/if}
{else}

</div>

<div id="addfunds">
	
	
	{$oper = $smarty.get.add}
	{if $oper == 'CASHIN'}
	
		<!--<h1>Add funds</h1>-->
		{if $_cfg.Depo_AutoDepo}
			{include file='depo/_depo.interval.tpl'}
		{/if}
		<p>{include file='balance/_bal.tpl'}
		{include file='edit.tpl'
			form='add'
			fields=[
				'Oper'=>$oper,
				'PSys'=>['S', 'Плат. Система!!', ['psys_empty'=>'select pay.system'], valueIf(count((array)$clist) > 1, [0=>'- select -'], []) + (array)$clist, 'default'=>$user.aDefCurr],
				'Sum'=>['$', 'Сумма!!', ['sum_wrong'=>'wrong amount'], 'comment'=>' <i><span id="ccurr"></span></i>'],
				'Plan'=>['S', 'План', ['plan_wrong'=>'Неверный План'], [0=>'- auto -'] + (array)$plans, 'skip'=>(count($plans) <= 1)],
				'Compnd'=>['%',	'Compaund', ['compnd_wrong'=>"wrong value [$cmin..$cmax]", 'compnd_wrong1'=>"wrong value for plan '$cplan'"], 'skip'=>!$pcmax]
			]
			errors=[
				'oper_disabled'=>'operation disabled'
			]
		}
		
</div>	
	{elseif $oper == 'CASHOUT'}
	
		<!--<h1>Withdraw</h1>-->
		
		{$s = valueIf($_cfg.Const_IntCurr, 'Amount!! <<in internal units>>', 'Сумма!!')}
		<p>{include file='balance/_bal.tpl'}
		{include file='edit.tpl'
			form='add'
			fields=[
				'Oper'=>$oper,
				'PSys'=>['S', 'Плат. Система!!', ['psys_empty'=>'pay.system wrong'], valueIf(count((array)$clist) > 1, [0=>'- select -'], []) + (array)$clist, 'default'=>$user.aDefCurr],
				'Sum'=>['$', $s, ['sum_wrong'=>'wrong amount', 'limit_exceeded'=>'limit exceeded'], 'comment'=>valueIf($_cfg.Const_IntCurr, " <b>{$icurr}</b>", ' <i><span id="ccurr"></span></i>')],
				'PIN'=>
					[
						'*',
						'Input PIN-code!!',
						[
							'pin_wrong'=>'wrong code'
						],
						'skip'=>!$_cfg.Bal_NeedPIN,
						'size'=>8
					]
			]
			errors=[
				'low_bal1'=>'insufficient funds',
				'oper_disabled'=>'operation disabled'
			]
		}
		
	
	{elseif $oper == 'EX'}
	
		<h1>Exchange</h1>
		{include file='edit.tpl'
			form='add'
			fields=[
				'Oper'=>$oper,
				'PSys'=>['S', 'From payment system!!', ['psys_empty'=>'pay.system wrong'], valueIf(count((array)$clist) > 1, [0=>'- select -'], []) + (array)$clist],
				'Sum'=>['$', 'Amount!!', ['sum_wrong'=>'wrong amount'], 'comment'=>' <i><span id="ccurr"></span></i>'],
				'Comis'=>['X', 'Comission', 'comment'=>' <i><span id="csum"></span></i>'],
				'PSys2'=>['S', 'To payment system!!', ['psys2_empty'=>'pay.system wrong', 'psys2_equal_psys'=>'pay.system must be different', 'ex_rate_not_set'=>'exchange rate is not specified'], valueIf(count((array)$clist2) > 1, [0=>'- select -'], []) + (array)$clist2],
				'Sum2'=>['X', 'Amount to receive', 'comment'=>' <i><span id="sum2"></span></i>']
			]
			errors=[
				'low_bal1'=>'insufficient funds',
				'oper_disabled'=>'operation disabled'
			]
		}
	
	{elseif $oper == 'TR'}

		<h1>Transfer</h1>
		{include file='edit.tpl'
			form='add'
			fields=[
				'Oper'=>$oper,
				'PSys'=>valueIf($_cfg.Const_IntCurr, 
					1, 
					['S', 'Payment system!!', ['psys_empty'=>'pay.system wrong'], valueIf(count((array)$clist) > 1, [0=>'- select -'], []) + (array)$clist]
				),
				'Sum'=>['$', 'Amount!!', ['sum_wrong'=>'wrong amount'], 'comment'=>' <i><span id="ccurr"></span></i>'],
				'Comis'=>['X', 'Comission', 'comment'=>' <i><span id="csum"></span></i>'],
				'Sum2'=>['X', 'The recipient will be transfered', 'comment'=>' <i><span id="sum2"></span></i>'],
				'Login2'=>['T', 'Recipient!!', ['user2_empty'=>'user not found', 'user2_equal_user'=>'users must be different']],
				'Memo'=>['W', 'Memo', 'size'=>4]
			]
			errors=[
				'low_bal1'=>'insufficient funds',
				'oper_disabled'=>'operation disabled'
			]
		}
	
	{/if}

	{include file='balance/_oper.js.tpl' oper=$oper use_sum2=true}
	
{/if} 
        </div>
        
</div>


{include file='footer3.tpl'}
{/strip}