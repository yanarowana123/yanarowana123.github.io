{_getFormSecurity form=$edit_form_name captcha=$captcha}
	{if $__Capt}
		{include file='captcha.tpl' form=$edit_form_name star=$edit_descr_star}
	{/if}


	{if $errors}
		{include file='err.tpl' form=$edit_form_name errs=$errors}
		{$error_text}
	{/if}
