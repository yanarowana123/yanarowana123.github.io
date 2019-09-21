{if $smarty.server.HTTP_X_REQUESTED_WITH!='XMLHttpRequest'} 
	<script type="text/javascript">
	location.replace("{$link}"); 
	</script>
	<noscript>
	<meta http-equiv="refresh" content="0; url={$link}"> 
	</noscript>	
{/if}