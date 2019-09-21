{strip}
{include file='header2.tpl' title='News'}
<div id="newsstr">
    <h1>Новости</h1>
    <div id="nnews">
        <br>
        <h2>&#8226; Мы запустились!</h2>
        <h3>19.08.2016</h3>
        <p>
            Дорогие Партнеры.  <br>
           На данный момент идет предстарт. Минимальный вывод в системе будет 1$. Открытие площадки намечено на 22 августа в 19:00 по Москве! Следите за новостями в официальном сообществе компании. <a href="https://vk.com/" target="_blank">Перейти</a>
        <br>
            <h4>Спасибо, что выбрали Golden Forex</h4>
        </p>
    </div>
    <div id="nnews">
        <br>
        <h2>&#8226;</h2>
        <h3></h3>
        <p>
           <br>
        </p>
    </div>
    <div id="nnews">
        <br>
        <h2>&#8226;</h2>
        <h3></h3>
        <p>
            <br>
        </p>
    </div>
    <div id="nnews">
        <br>
        <h2>&#8226;</h2>
        <h3></h3>
        <p>
            <br>
        </p>
</div>
    
</div>

{if $list}
	<table class="faq">
	{foreach name=list from=$list key=id item=l}
		<tr>
			<td>
			    <div style="padding: 20px 30px;background: #ffffff;border: 1px solid rgba(0, 0, 0, 0.08);width: 1040px;margin: 15px 0px;font-size: 16px;border-radius: 6px;font-style: italic;">
				<h2 style="margin-bottom: 12px;">{$l.nTopic} <small style="float:right;">{$l.nTS}</small></h2>
				<p>{$l.nAnnounce|nl2br}</p>
				<div style="text-align: right;margin-top: 15px;">
					<a href="{_link module='news/show' chpu=[$l.nID, $l.nTopic]}"><small style="text-transform: lowercase;color: #12C1C1;">Read more!</small></a>
				</div>
				</div>
			</td>
		</tr>
	{/foreach}
	</table>
	{include file='pl.tpl'}
	<br>
{/if}

{include file='footer.tpl'}
{/strip}