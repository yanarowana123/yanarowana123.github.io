<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['message']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'php_xay@inbox.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обратный звонок'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>соопшения: '.$_POST['message'].'</p>
                        <p>майл: '.$_POST['email'].'</p>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=windows-1251 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>


<HTML>
  <HEAD>
    <META HTTP-EQUIV="REFRESH" CONTENT="1; URL=http://anticris-center.ru/">
  </HEAD>
  <BODY>
  </BODY>
</HTML>









