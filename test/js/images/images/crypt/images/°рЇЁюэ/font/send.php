<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['message']!="")){ //�������� ����������� �� ���� ���� name � �� ������ �� ���
        $to = 'php_xay@inbox.ru'; //����� ����������, ����� ������� ����� ������� ������� ������ �������
        $subject = '�������� ������'; //��������� ���������
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>���������: '.$_POST['message'].'</p>
                        <p>����: '.$_POST['email'].'</p>                        
                    </body>
                </html>'; //����� ������ ��������� ����� ������������ HTML ����
        $headers  = "Content-type: text/html; charset=windows-1251 \r\n"; //��������� ������
        $headers .= "From: ����������� <from@example.com>\r\n"; //������������ � ����� �����������
        mail($to, $subject, $message, $headers); //�������� ������ � ������� ������� mail
}
?>


<HTML>
  <HEAD>
    <META HTTP-EQUIV="REFRESH" CONTENT="1; URL=http://anticris-center.ru/">
  </HEAD>
  <BODY>
  </BODY>
</HTML>









