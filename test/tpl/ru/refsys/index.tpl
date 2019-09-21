{strip}
{include file='header3.tpl' title='Referral system'}

<div id="cabin">
    <div class="mycab left-cb">
            <div class="mycab-menu">		
                <ul>
                    <li><a href="/cabinet">Кабинет</a></li>
                    <li><a href="/deposits">Депозиты</a></li>
                    <li><a href="/operations">Операции</a></li>
                    <li><a href="/refsys"  style="color:#ffad15; border: 1px solid #f7a610">Партнеры</a></li>
                    <li><a href="/balance/wallets">Кошельки</a></li>
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
        <div id="refsys">
        {if _uid()}
            {include file='edit.tpl'
                fields=[
                    'RefLogin'=>
                        [
                            'X',
                            'You invited by',
                            0,
                            $reflogin,
                            'skip'=>!$reflogin
                        ],
                    'RefURL'=>
                        [
                            'X',
                            'Ваша реферальная ссылка :',
                            0,
                            "<a href=\"{$refurl}\" target=\"_blank\">{$refurl}</a>"
                        ],
                    'Refs'=>
                        [
                            'U',
                            'refsys/_refs.tpl',
                            'skip'=>!$refs
                        ]
                ]
                btn_text=' '
            }
            {if $_cfg.Account_RegMode == 3}
                <h2>Invites</h2>
            {/if}
        {/if}  
           
        <div id="adv">
            <div id="ban">
              
            </div>
        </div>
        </div>
    </div>
</div>


{include file='footer3.tpl'}
{/strip}