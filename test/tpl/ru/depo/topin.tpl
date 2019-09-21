{strip}
{include file='header.tpl' title='Top of investors'}
<div style="min-height:500px;">
<h1  style="font-size:35px; color: #e2e2e2; line-height:75px; text-align:right; font-weight:100; width:800px;">Рейтинг инвесторов</h1>

{if $list}
	<table class="FormatTable" border="1">
		<tr>
			<th>Пользователь</th>
			<th>Сумма вклада</th>
		</tr>
		{foreach from=$list key=i item=r}
			{if $r.RSUM > 0}
				<tr>
					<td>{$r.uLogin}</td>
					<td align="right">{_z($r.RSUM, 1)}</td>
				</tr>
			{/if}
		{/foreach}
	</table>
{/if}
<br>
</div>
{include file='footer.tpl'}
{/strip}