{strip}
{include file='header3.tpl' title='Deposit'}

<div id="cabin">
       <div class="mycab left-cb">
            <div class="mycab-menu">		
                <ul>
                    <li><a href="/cabinet">Кабинет</a></li>
                    <li><a href="/deposits" style="color:#ffad15; border: 1px solid #f7a610">Депозиты</a></li>
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
                <div class="for">
                    <a href="#" target="_blank">MMGP</a>     
                </div>
                <div class="for">
                    <a href="#" target="_blank">TG</a>    
                </div>
            </div>-->
       </div>
       <div class="mycab right-cb">
           {if $el}
	<h1>Deposit</h1>
	{include file='depo/_depo.tpl'}
    {else}
	    {include file='depo/_depo.interval.tpl'}
        {include file='depo/_depo.new.tpl'}
    {/if}
    </div>
        
</div>

{include file='footer3.tpl'}
{/strip}