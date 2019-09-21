{strip}
{if $user.aAvatar}
	<img src="{$smarty.const.AVATAR_DIR}a{$user.auID}.jpg">
{else}
	<img src="images/user_noavatar.jpg">
{/if}
{/strip}
