{strip}<center>{include file='edit.tpl'	url="{_link module='message/support'}"	fields=	[		'Mail'=>			[				'T', 				'Ваш e-mail!! <<для связи>>',				[					'user_not_found'=>'укажите e-mail',					'mail_wrong'=>'неверный e-mail'				],				'skip'=>_uid(),				'default'=>$user.uMail			],		'Category'=>			[				'S',				'Категория',				0,				$cats,				'skip'=>!$cats			],		'Topic'=>			[				'L',				'Тема!!',				[					'topic_empty'=>'укажите тему'				],				'size'=>50			],		'Message'=>			[				'W',				'Текст!!',				[					'text_empty'=>'укажите текст'				],				'size'=>12,				'cols'=>60			]	]	captcha=$_cfg.Msg_Captcha	btn_text='Отправить'}</center>{/strip}