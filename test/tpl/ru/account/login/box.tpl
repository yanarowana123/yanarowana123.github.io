{strip}
{if $_cfg.Account_Loginza}
	{include file='account/loginza/box.small.tpl'}
	<br>
	<h3>or</h3>
{/if}
	
{$txt_login=valueIf($_cfg.Const_NoLogins, 'e-mail', 'Login')}
{include file='edit.tpl' 
	url="{_link module='account/login'}"
	form='login_frm'
	fields=
	[
		'Login'=>
			[
				'T', 
				"Ваш Логин!!",
				[
					'login_empty'=>"input $txt_login/Password", 
					'login_not_found'=>"wrong $txt_login/Password", 
					'not_active'=>'account e-mail is not confirmed',
					'banned'=>"access to the account is suspended $ban_date", 
					'blocked'=>'account is blocked'
				]
			],
		'Pass'=>
			[
				'*',
				'Ваш Пароль!!',
				[
				]
			],
		'Remember'=>
			[
				'CC',
				'Запомнить Меня',
				[
				]
			],
		'URL'=>
			$url 
	]
	captcha=$_cfg.Account_LoginCaptcha
	btn_text='Войти'
}
{/strip}