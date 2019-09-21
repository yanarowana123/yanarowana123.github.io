{strip}
{include file='header3.tpl' title=''}

<div id="cabin">
       <div class="mycab left-cb">
            <div class="mycab-menu">		
                <ul>
                    <li><a href="/cabinet" style="color:#ffad15; border: 1px solid #f7a610">Кабинет</a></li>
                    <li><a href="/deposits">Депозиты</a></li>
                    <li><a href="/operations">Операции</a></li>
                    <li><a href="/refsys">Партнеры</a></li>
                    <li><a href="/balance/wallets">Кошельки</a></li>
				
                    <li><a href="/account" style="margin-right:0px;">Настройки</a></li>
                </ul>
            </div>	
            <!--<div id="m-con">
                <div class="for">
                    <a href="#" target="_blank">MMG</a>    
                </div>
                <div class="for cent">
                    <a href="#" target="_blank">MMGP</a>     
                </div>
                <div class="for">
                    <a href="#" target="_blank">TG</a>    
                </div>
            </div>-->
       </div>
       <div class="mycab right-cb">
            <!--<h1>Cabinet: {$user.aName}</h1>-->
            <p>  
                {include file='balance/_bal.tpl'}
            </p>  
            
            <div id="btcab">
                <a href="/operation?add=CASHIN" class="dps">Создать Депозит</a>
                <a href="/operation?add=CASHOUT" class="dps">Вывести Средства</a>
                <a href="/refsys" class="dps">Промо</a>
            </div>
            
            {include file='balance/_stat.tpl'}
       </div>
        
</div>


{include file='footer3.tpl'}
{/strip}