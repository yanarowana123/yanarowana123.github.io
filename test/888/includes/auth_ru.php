<titt>�������</titt><div class="progress-content"><?php
if(!$login) {
?>

<?php
} else {
    print "<p align=\"center\"><b>����� ���������� <b style=\"color: green\">".$login."</b>!</b><br /> ������: $<b>".$balance."</b></p>";
	print '<ul>';
	if($status == 1) {
		print '<li class="subm2" style="width: 220px; margin:3px 0 0 0"><a href="/adminpanel/"><b>��������������</b></a></li>';
	}
	print '<li class="subm2" style="width: 220px; margin:3px 0 0 0 "><a href="/enter/">��������� ������</a></li>';
	print '<li class="subm2" style="width: 220px; margin:3px 0 0 0"><a href="/deposit/">������� �������</a></li>';
	print '<li class="subm2" style="width: 220px; margin:3px 0 0 0"><a href="/deposits/">���� ��������</a></li>';
	if(cfgSET('cfgTrans') == "on") {
		print '<li class="subm2" style="width: 220px; margin:3px 0 0 0"><a href="/transfer/">������� �������</a></li>';
	}
	print '<li class="subm2" style="width: 220px; margin:3px 0 0 0"><a href="/withdrawal/">������� ��������</a></li>';
	print '<li class="subm2" style="width: 220px; margin:3px 0 0 0"><a href="/ref/">����������� ���������</a></li>';
	print '<li class="subm2" style="width: 220px; margin:3px 0 0 0"><a href="/stat/">����������</a></li>';
	print '<li class="subm2" style="width: 220px; margin:3px 0 0 0"><a href="/profile/">��� �������</a></li>';
	print '<li class="subm2" style="width: 220px; margin:3px 0 0 0"><a href="/exit.php">�����</a></li>';
	print '</ul>';
}
?>
</div>