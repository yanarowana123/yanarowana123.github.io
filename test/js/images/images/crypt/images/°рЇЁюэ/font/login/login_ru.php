<?php
if($er) {
	print '<div class="er" style="text-align: left; padding-left: 15px; margin-bottom: 25px;">
	<strong>�� ������� �����.</strong><br />
	����������, ��������� ������������ ��������� <b>������</b> � <b>������</b>.
	<ul>
		<li>��������, ������ ������� CAPS-LOCK?</li>
		<li>����� ����, � ��� �������� ������������ <b>���������</b>? (������� ��� ����������)</li>
		<li>���������� ������� ���� ������ � ��������� ��������� � <b>�����������</b> � ����� ��������</li>
	</ul>
	���� �� �� ����������� ���������, �� ����� �� ����� �� �������, �� ������ <b><a href="/reminder/">������ ����</a></b>.</div>';
} else {
	print '<p class="warn">!</p>';
}
?>
<div align="center">
<form method="post" action="/login/">
	<p><input type="text" name="user" style="width: 150px;" onblur="if (value == '') {value='Login'}" onfocus="if (value == 'Login') {value =''}" value="Login" /> <input type="password" name="pass" style="width: 150px;" onblur="if (value == '') {value='password'}" onfocus="if (value == 'password') {value =''}" value="password" /> <input class="subm" type="submit" value=" LOGIN! " /></p>
	<p><a href="/registration/">Registration</a> || <a href="/reminder/">Forgot password?</a></p>
</form>
</div>