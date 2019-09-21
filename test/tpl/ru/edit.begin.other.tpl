{strip}
{*
	title:
	title_new:
	url: (* = selfurl)
	form: form name
	data: (true = multipart/form-data)
	form_class: class for form
	on_submit:
*}

{$edit_descr_rem='<span class="descr_rem">(' scope='global'}
{$edit_descr_star='<span class="descr_star">*</span>' scope='global'}

{$edit_is_new = !$values scope='global'}


{$edit_form_name=getFormName($form) scope='global'}
{include file='edit.info.tpl' _info=getInfoData($edit_form_name)}

<form method="post"	{if $url} action="{if $url == '*'}{$_selfLink}{else}{$url}{/if}"{/if} name="{$edit_form_name}"
	{if $data} enctype="multipart/form-data"{/if}
	{if $form_class} class="{$form_class}"{/if}
	{if $id} id="{$id}"{/if}
	{if $on_submit} onSubmit="{$on_submit}"{/if}
>

{/strip}