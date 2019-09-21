{strip}
{include file='header.tpl' title='Change password'}
<div id="chanpass">
<h1>Смена пароля</h1>

{if $user.uPTS == 1}

	<p class="info">
		
        Вы получили временный пароль . <br>
		Измените его на более сложный
	</p>

{elseif isset($smarty.get.need_change)}

	<p class="info">
		Вы не изменили пароль .<br>
		Политика безопасности нашего веб-сайта требует изменения его
	</p>

{/if}

{include file='edit.tpl'
	url='*'
	fields=
	[
		'Pass0'=>
			[
				'*',
				'Старый пароль!!',
				[
					'pass0_wrong'=>'wrong password'
				]
			],
		'Pass'=>
			[
				'*',
				'Новый пароль!!',
				[
					'pass_empty'=>'input password',
					'pass_short'=>"password is too short [less than $MinPass]",
					'pass_wrong'=>'password does not match the format'
				]
			],
		'Pass2'=>
			[
				'*',
				'Повторите новый пароль!!',
				[
					'pass_not_equal'=>'passwords do not match'
				]
			],
		'PIN'=>
			[
				'*',
				'
              PIN- код',
				[
					'pin_wrong'=>'wrong code'
				],
				'skip'=>($_cfg.Sec_MinPIN == 0),
				'size'=>8
			]
	]
	btn_text='Сменить'
	btns=valueIf(isset($smarty.get.need_change), ['skip'=>'Do not change'])
}
</div>
{include file='footer3.tpl'}
{/strip}