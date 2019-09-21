{strip}
{include file='header3.tpl' title=''}

<div id="cabin">
    <div class="mycab left-cb">
            <div class="mycab-menu">		
                <ul>
                    <li><a href="/cabinet">Кабинет</a></li>
                    <li><a href="/deposits">Депозиты</a></li>
                    <li><a href="/operations">Операции</a></li>
                    <li><a href="/refsys">Партнеры</a></li>
                    <li><a href="/balance/wallets" style="color:#ffad15; border: 1px solid #f7a610">Кошельки</a></li>
                    <li><a href="/account" style="margin-right:0px;">Настройки</a></li>
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
           <div id="wal">
            {if !$wfields}
                <p class="info">
                   Платежные системы не подключены
                </p>
            {else}
                {if $_cfg.Const_IntCurr}
                    {$wfields = [
                        'DefCurr'=>[
                            'S',
                            'Default payment system!!',
                            [
                                'psys_wrong'=>'input pay.system'
                            ],
                            [0=>'- select -'] + (array)$defcurr,
                            'default'=>$user['aDefCurr']
                        ]
                    ]+$wfields}
                {/if}
                {if $showbutton and ($_cfg.Sec_MinPIN > 0)}
                    {$wfields[] = ''}
                    {$wfields['PIN'] = [
                                    '*',
                                    'Input PIN-code!! <<to confirm changes>>',
                                    [
                                        'pin_wrong'=>'wrong code'
                                    ],
                                    'size'=>8
                                ]}
                {/if}
                {include file='edit.tpl'
                    url='*'
                    fields=$wfields
                    values=$wdata
                    btn_text=valueIf(!$showbutton, ' ')
                }
            {/if} 
            </div>   
        </div>
</div>


{include file='footer3.tpl'}
{/strip}