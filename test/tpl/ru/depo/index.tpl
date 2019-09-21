{strip}
{include file='header3.tpl' title=''}

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
           <div id="dep-but">
               <h4><a href="/operation?add=CASHIN" align="center" class="button-greens">Создать Депозит</a></h4>
               <h4><a href="{_link module='depo/depo'}?add" align="center" class="button-greens">Реинвест</a></h4>
           </div>
           <br>
           <div id="depo">
                
                <!--<h1>Deposits</h1>-->
                {include file='depo/_statuses.tpl'}
                {if $list}
                    {include file='list.tpl' 
                        url='*'
                        fields=[
                            'dCTS'=>['Дата начала'],
                            'cName'=>['Плат.система'],
                            'dZD'=>['Сумма'],
                            'pName'=>['План'],
                            'dLTS'=>['Посл. начисл.'],
                            'dN'=>['Начислений'],
                            'dZP'=>['<small>Начислено</small>'],
                            'dNTS'=>['След.начисл.'],
                            'dState'=>['Статус']
                        ]
                        values=$list
                        row='*'
                    }
                     
                {else}

                      <p><b>У Вас пока нет вкладов</b></p>
                    <br>
                    <br>
                {/if}
           </div>
            
       </div>
        
</div>

{include file='footer3.tpl'}
{/strip}