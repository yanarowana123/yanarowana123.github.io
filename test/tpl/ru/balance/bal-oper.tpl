{strip}
	{if $currs}


                      {assign var="data_lock1" value=0}
                      {assign var="data_lock2" value=0}
                      {assign var="data_lock3" value=0}
                      {assign var="data_bal1" value=0}
                      {assign var="data_bal2" value=0}
                      {assign var="data_bal3" value=0}
                      {assign var="data_out1" value=0}
                      {assign var="data_out2" value=0}
                      {assign var="data_out3" value=0}
      {foreach from=$currs key=i item=c}
        {if $c.cCurr=='USD'}
          {assign var="data_lock1" value=$data_lock1+$c.wLock}
          {assign var="data_bal1" value=$data_bal1+$c.wBal}
           {assign var="data_out1" value=$data_out1+$c.wOut}
        {/if}
        {if $c.cCurr=='RUB'}
          {assign var="data_lock2" value=$data_lock2+$c.wLock}
          {assign var="data_bal2" value=$data_bal2+$c.wBal}
           {assign var="data_out2" value=$data_out2+$c.wOut}
        {/if}
        {if $c.cCurr=='BTC'}
          {assign var="data_lock3" value=$data_lock3+$c.wLock}
          {assign var="data_bal3" value=$data_bal3+$c.wBal}
           {assign var="data_out3" value=$data_out3+$c.wOut}
        {/if}
      {/foreach}


<div class="blocks">
              <small></small>
            
            </div>
            <div class="blocks">
             
             
            </div>
            <div class="blocks">
              <small>RUB</small>
              <span>{$data_bal2|number_format:2|replace:'-':''}<small>р</small></span>
            </div>









{/if}
{/strip}
