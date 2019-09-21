{strip}
{include file='header.tpl' title='Top of inviters'}

<div id="cabin">
    <div class="mycab left-cb">
            <div class="mycab-menu">		
                <ul>
                    <li><a href="/cabinet">Кабинет</a></li>
                    <li><a href="/deposits" style="color:#e39d2c;">Депозиты</a></li>
                    <li><a href="/operations">Операции</a></li>
                    <li><a href="/balance/wallets">Кошельки</a></li>
                    <li><a href="/refsys">Партнеры</a></li>
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
        <div id="top">
        <!--<h1>Top of inviters</h1>
        <h2>By amount</h2>-->
        {if $list1}
            <table class="FormatTable" border="1">
                <tr>
                    <th>User</th>
                    <th>Amount</th>
                </tr>
                {foreach from=$list1 key=i item=r}
                    {if $r.RSUM > 0}
                        <tr>
                            <td>{$r.uLogin}</td>
                            <td align="right">{_z($r.RSUM, 1)}</td>
                        </tr>
                    {/if}
                {/foreach}
            </table>
        {/if}
        <br>

        <!--<h2>By count</h2>-->
        {if $list2}
            <table class="FormatTable" border="1">
                <tr>
                    <th>User</th>
                    <th>Count</th>
                </tr>
                {foreach from=$list2 key=i item=r}
                    {if $r.RCNT > 0}
                        <tr>
                            <td>{$r.uLogin}</td>
                            <td align="right">{$r.RCNT}</td>
                        </tr>
                    {/if}
                {/foreach}
            </table>
        {/if}  
    </div> 
    </div>
</div>




{include file='footer.tpl'}
{/strip}