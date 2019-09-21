{strip}
{include file='header2.tpl' title='FAQ'}

<div id="myfaq">
   <h1>Frequently Asked Questions</h1>
    <h2>- How secure is your website and my account data?</h2>
    <p>
    We have a wide range of security measures to protect your account. Our website is protected against DDoS attacks, all transferred data are SSL-encrypted and we use a licensed script.
    </p>
    <h2>- After I make a withdrawal request, when will the funds be available on my e-currency account?</h2>
    <p>
    Payeer and BitCoin withdrawals are processed instantly, while PerfectMoney withdrawals are processed manually within 24 hours, 
    for security reasons. Moreover, every single deposit and withdrawal via PerfectMoney is checked very carefully, to prevent cheating. 
    </p>
    <h2>- What is the Referral Commission offered by StorageCustom?</h2>
    <p>
    StorageCustom offers to its members a very attractive and lucrative referral commission of 3%, for every single deposit that your referral makes from his e-currency account. For example, if your referrals deposit $100,000 total into StorageCustom everyday, you will receive $3,000 referral commissions everyday, directly to your account balance, that you can withdraw anytime you wish! Therefore, it is highly recommended to invite all your friends to StorageCustom and advertise the project everywhere, as you can make a lot of money from the 3% referral commissions!
    </p>
    <h2>- I made a deposit via BitCoin but it wasn't added instantly to my account. When it will be credited?</h2>
    <p>
    BitCoin deposits are credited automatically, within 1-24 hours (maximum), from the moment you made the deposit.
    </p>
    <h2>- How can I invest with StorageCustom.  ?</h2>
    <p>
    To make a investment you must first become a member of StorageCustom investment program. Once you are signed up, you can make your first deposit. All deposits must be made through the Members Area. You can login using the member username and password you receive when signup.
    </p>    
    <h2>- I wish to invest with StorageCustom but I don't have an any e-currency account. What should I do?</h2>
    <p>
    You can open a free PerfectMoney account here: <a href="https://www.perfectmoney.is/">www.perfectmoney.is</a><br>
    You can open a free Payeer account here: <a href="https://www.payeer.com/">www.payeer.com</a><br>
    You can open a free BitCoin account here: <a href="https://www.blockchain.info/">www.blockchain.info</a>
    </p>
    <h2>- How do I open my StorageCustom investment account?</h2>
    <p>
    It's quite easy and convenient. Follow this <a href="registration">link</a>, fill 
    in the registration form and then press "Register".
    </p>
    <h2>- Which e-currencies do you accept?</h2>
    <p>
    We accept:<br>
    PerfectMoney, Payeer and BitCoin. 
    </p>
    <h2>- How can I withdraw funds?</h2>
    <p>
    Login to your account using your username and password and check the Withdraw section. 
    </p>
    <h2>- How long does it take for my deposit to be added to my account?</h2>
    <p>
    Your account will be updated as fast, as you deposit. 
    </p>
    <h2>- How can I change my e-mail address or password?</h2>
    <p>
    Log into your StorageCustom account and click on the "Account Information". You can change your e-mail address and password there. 
    </p>
    <h2>- What if I can't log into my account because I forgot my password?</h2>
    <p>
    Click <a href="resetpass">forgot password</a> link, type your username or e-mail and you'll receive your account information. 
    </p>
    <h2>- Does a daily profit paid directly to my currency account?</h2>
    <p>
    No, profits are gathered on your StorageCustom account and you can withdraw them anytime. 
    </p>
    <h2>- Can I do a direct deposit from my account balance?</h2>
    <p>
    Yes! To make a deposit from your StorageCustom account balance. Simply login into your members account and click on Make Deposit and select the Deposit from Account Balance Radio button. 
    </p>
    <h2>- Can I make an additional deposit to StorageCustom account once it has been opened?</h2>
    <p>
    Yes, you can but all transactions are handled separately. 
    </p>
    <h2>- How can I change my password?</h2>
    <p>
    You can change your password directly from your members area by editing it in your personal profile. 
    </p>
    <h2>- How can I check my account balances?</h2>
    <p>
    You can access the account information 24 hours, seven days a week over the Internet. 
    </p>
    <h2>- May I open several accounts in your program?</h2>
    <p>
    No. If we find that one member has more than one account, the entire funds will be frozen. 
    </p>
    <h2>- How can I make a spend?</h2>
    <p>
    To make a spend you must first become a member of StorageCustom investment program. Once you are signed up, you can make your first spend. All spends must be made through the Member Area. You can login using the member username and password you received when signup.
    </p>
    <h2>- Who manages the funds?</h2>
    <p>
    These funds are managed by a team of StorageCustom investment experts. 
    </p>
</div>

{if $list}
	<table class="faq">
	{foreach name=list from=$list key=id item=l}
		<tr>
			<td>
				<div style="padding: 20px 30px;background: #ffffff;border: 1px solid rgba(0, 0, 0, 0.08);width: 1040px;margin: 15px 0px;font-size: 16px;border-radius: 6px;font-style: italic;">
				    <h2>{$l.fQuestion}</h2>
					<p>{$l.fAnswer}</p>
				</div>
			</td>
		</tr>
	{/foreach}
	</table>
	{include file='pl.tpl'}
	<br>
{/if}

<script type="text/javascript">
	$('.question').next().hide();
	$('.question').click(
		function()
		{
			$(this).next().slideToggle();
	    }
	);
</script>

{include file='footer.tpl'}
{/strip}