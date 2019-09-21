{strip}
{include file='header3.tpl' title='Balance'}

<div id="cabin">
       <div class="mycab left-cb">
            <div class="mycab-menu">		
                <ul>
                    <li><a href="/cabinet">Кабинет</a></li>
                    <li><a href="/deposits">Депозиты</a></li>
                    <li><a href="/operations" style="color:#ffad15; border: 1px solid #f7a610">Операции</a></li>
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
            <div id="bal">
               
                {if isset($smarty.get.fail)}
                
                <h2>Operation NOT complete!</h2>
                <p class="info">
                    The operation was was aborted or an error occurs.<br>
                    Try <a href="{$_selfLink}">again</a> later
                </p>
                {else}
                <div id="bal-a">
                <a href="{_link module='balance/oper'}?add=CASHIN" class="button-green">Пополнить</a>

                &nbsp;<a href="{_link module='balance/oper'}?add=CASHOUT" class="button-green">Вывести</a>

              
                <br>
            </div>
                {if $list}
                    {include file='balance/_statuses.tpl'}
                    {include file='list.tpl' 
                        title=''
                        url='*'
                fields=[
                'oTS'=>['Дата'],
                'oOper'=>['Операция'],
                'oCID'=>['Плат.система'],
                'oSum1'=>['Приход'],
                'oSum2'=>['Расход'],
                'oBatch'=>['Batch-номер'],
                'oState'=>['Статус'],
                'oMemo'=>['Примечание']
                ]
                        values=$list
                        row='*'
                    }
                    {/if}
                {/if}
            </div>    
        </div>
</div>

{include file='footer3.tpl'}
{/strip}