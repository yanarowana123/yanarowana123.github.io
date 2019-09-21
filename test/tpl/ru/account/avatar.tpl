{strip}
{include file='header.tpl' title='Аватар'}
<h1>Сменить аватар</h1>

{include file='edit.tpl'
	url='*'
	fields=
	[
		'MAX_FILE_SIZE'=>1000000,
		'Avatar'=>
			[
				'E',
				'Файл <<изображение смасштабируется автоматически>>'
			]
	]
	data=1
	btn_text='Загрузить'
	btns=[clear=>'Удалить']
}

{include file='footer.tpl'}

{/strip}