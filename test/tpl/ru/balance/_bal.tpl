{strip}
{if $curr1}
	Your balance is {_z($curr1.wBal, $curr1.cID, 2)}
{elseif $user.uBal > 0}
	{include file='balance/bal.tpl'}
{else}
	<b>Нет средств на балансе</b> 
{/if}
{/strip}