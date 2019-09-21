{strip}
{include file='header.tpl' title='Avatar'}
<h1>Change avatar</h1>

{include file='edit.tpl'
	url='*'
	fields=
	[
		'MAX_FILE_SIZE'=>1000000,
		'Avatar'=>
			[
				'E',
				'Select image file <<will be resized>>'
			]
	]
	data=1
	btn_text='Upload'
	btns=[clear=>'Clear']
}

{include file='footer.tpl'}

{/strip}