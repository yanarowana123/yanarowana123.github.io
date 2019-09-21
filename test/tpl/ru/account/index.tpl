{strip}
{include file='header3.tpl' title='Account'}

<div id="cabin">
    <div class="mycab left-cb">
            <div class="mycab-menu">		
                <ul>
                    <li><a href="/cabinet">Кабинет</a></li>
                    <li><a href="/deposits">Депозиты</a></li>
                    <li><a href="/operations">Операции</a></li>
                    <li><a href="/refsys">Партнеры</a></li>
                    <li><a href="/balance/wallets">Кошельки</a></li>
                    <li><a href="/account" style="color:#ffad15; border: 1px solid #f7a610">Настройки</a></li>
                </ul>
            </div>	
            <!--<div id="m-con">
                <div class="for">
                    <a href="#" target="_blank">MMG</a>    
                </div>
                <div class="for">
                    <a href="#" target="_blank">MMGP</a>     
                </div>
                <div class="for">
                    <a href="#" target="_blank">TG</a>    
                </div>
            </div>-->
       </div>
    <div class="mycab right-cb">
       <div id="edit">
        <h1>Личные настройки</h1>
        {if $_cfg.Sec_ForceReConfig and $user.aNeedReConfig}
            <p class="info">
                Before you begin you must set your personal settings
            </p>
        {/if}
        {include file='edit.tpl'
            url='*'
            title1='Parameters'
            fields=
            [
                'aName'=>
                    [
                        'T',
                        'Your Name!!',
                        [
                            'name_empty'=>'input Name'
                        ],
                        'readonly'=>$_cfg.Account_LockData,
                        'skip'=>($_cfg.Account_UseName == 0)
                    ],
                'uLogin'=>
                    [
                        'X',
                        'Ваш Логин',
                        0,
                        'skip'=>$_cfg.Const_NoLogins
                    ],
                'uMail'=>
                    [
                        'X',
                        'Ваш e-mail'
                    ],
                'aTel'=>
                    [
                        'T',
                        'Your phone number!! <<with country code>>',
                        [
                            'tel_wrong'=>'wrong number'
                        ],
                        'skip'=>!$_cfg.SMS_REG
                    ],
                'TZ'=>
                    [
                        'T',
                        'Часовой пояс!! <<от GMT>>',
                        [
                            'tz_wrong'=>'wrong zone [h:m]'
                        ],
                        'comment'=>'+4:00 = Moscow',
                        default=>$utz,
                        'size'=>6
                    ],
                'aNoMail'=>
                    [
                        'C',
                        'Не получать уведомления на e-mail',
                        'skip'=>$_cfg.Msg_NoMail
                    ],
                99=>'Безопасность',
                'aIPSec'=>
                    [
                        'S',
                        'Control IP-address change',
                        0,
                        [
                            0=>'- default -', 
                            1=>'x.0.0.0', 
                            2=>'x.x.0.0', 
                            3=>'x.x.x.0', 
                            4=>'x.x.x.x'
                        ]
                    ],
                'aSessIP'=>['C', 'Привязать сессию к IP-address'],
                'aSessUniq'=>['C', 'Запрет параллельных сессий'],
                'aTimeOut'=>['I', 'Авто выход через N минут <<0 - default>>'],
                'aSQuestion'=>
                    [
                        'T',
                        'Secret question!!',
                        [
                            'secq_empty'=>'input question',
                            'secq_short'=>"question is too short [less than {$_cfg.Sec_MinSQA}]"
                        ],
                        'skip'=>($_cfg.Sec_MinSQA == 0),
                        'size'=>40
                    ],
                'aSAnswer'=>
                    [
                        '*',
                        'Secret answer!! <<input to change>>',
                        [
                            'seca_empty'=>'input answer',
                            'seca_short'=>"answer is too short [less than {$_cfg.Sec_MinSQA}]",
                            'seqa_equal_secq'=>'answer can not be the same with the question'
                        ],
                        'skip'=>($_cfg.Sec_MinSQA == 0),
                        'size'=>40
                    ],
                'PIN'=>
                    [
                       '*',
				'PIN-код!! <<чтобы подтвердить изменения>>',
				[
                            'pin_wrong'=>'wrong code'
                        ],
                        'skip'=>($_cfg.Sec_MinPIN == 0),
                        'size'=>8
                    ]
            ]
            values=$user
            hide_cancel=$user.aNeedReConfig
        }
        {if !($_cfg.Sec_ForceReConfig and $user.aNeedReConfig)}
            <br>
            {if $_cfg.Account_Loginza}<a href="{_link module='account/loginza'}" class="button-gray">Profiles</a>&nbsp;{/if}
            {if !$_cfg.Account_LockData}<a href="{_link module='account/change_mail'}" class="button-green">Сменить e-mail</a>&nbsp;{/if}
            <h4><a href="{_link module='account/change_pass'}" class="button-greens2">Сменить пароль</a></h4>
            <br>
            <br>
        {/if}
        </div>
    </div>
</div>



{include file='footer3.tpl'}

{/strip}