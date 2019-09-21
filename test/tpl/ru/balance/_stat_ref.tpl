{strip}
{if $stats}
<table class="table tbl-style move-on " >
	
	<tr>
		{foreach from=$stats key=i item=c}
			<td align='center' width="16.6%" class='td-service-1'>{$c.cName} <img src="images/icons/{$c.cID}.png" alt=""></td>
		{/foreach}
	</tr>
	<tr>
{foreach from=$stats key=i item=c}
	
		
		<td align='center' class='plan-data'><small>$</small>{_z($c.ZREF, $c.cID, -1)}</td>
		
	
{/foreach}
</tr>
</table>
{/if}
{/strip}