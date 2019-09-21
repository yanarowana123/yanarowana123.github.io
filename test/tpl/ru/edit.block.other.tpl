{strip}
{*
	table_class: class for table
	fields: array(
		[row_class] class for table row
	)
	values:
*}
{foreach from=$fields key=f item=v}
	{if is_array($v) and !$v.skip and ($v[0] == 'Y')}
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		{break}
	{/if}
{/foreach}
<table class="table form {if $table_class}{$table_class}{else}{/if}">
	{foreach from=$fields key=f item=v}
	{if is_int($f)} 							{*** SECTION ***}
		<tr>
			<th colspan="2" align="left">
				{if $v}<h3>{$v}</h3>{/if}
			</th>
		</tr>
	{elseif !(is_array($v) and $v.skip)}
		{$vv = _arr_val($values, $f)}
		{if is_array($v) and $v[0]}				{*** VISIBLE ***}
			<tr{if $v.row_class} class="{$v.row_class}"{/if}>
				{include file='edit.row.other.tpl'}
			</tr>
		{else}									{*** HIDDEN ***}
			<input name="{$f}" id="{$edit_form_name}_{$f}" value="{if is_array($v)}{$vv}{else}{$v}{/if}" type="hidden">
		{/if}
	{/if}
	{/foreach}
</table>

{/strip}