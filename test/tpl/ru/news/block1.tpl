
{if $list}
    {foreach name=list from=$list key=id item=l}
            <li>

              <a href="{_link module='news/show' chpu=[$l.nID, $l.nTopic]}">{$l.nTopic}</a>
              <div>
                {$l.nAnnounce|nl2br|truncate:100}
              </div>
              <span class="date" style='float:left'> {$l.nTS|date_format:"%d %b"} </span>
              <div class="clearfix"></div>
            </li>
    {/foreach}
{/if}









