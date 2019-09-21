{strip}
{if $user.aAvatar}
	<img src="{$smarty.const.AVATAR_DIR}i{$user.auID}.jpg">
{else}
	<img src="images/user_noicon.jpg">
{/if}
{/strip}