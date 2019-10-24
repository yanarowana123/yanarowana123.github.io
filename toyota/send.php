<?php

if(isset($_POST['submit'])){
$to = "yanenarowana@gmail.com";; // Здесь нужно написать e-mail, куда будут приходить письма
$from = $_POST['toyota']; // this is the sender's Email address
$first_name = $_POST['user_name'];
$subject = "Форма отправки сообщений с сайта toyota";
$subject2 = "Copy of your form submission";
$message = $user_name . "Номер телефона:" . "\n\n" . $_POST['user_number'];
$message2 = "Here is a copy of your message " . $user_name . "\n\n" . $_POST['user_number'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers);
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
echo "Сообщение отправлено. Спасибо Вам " . $user_name . ", мы скоро свяжемся с Вами.";
}

?>

<!--Переадресация на главную страницу сайта, через 3 секунды-->
<!-- <script type="text/javascript">
function changeurl(){eval(self.location="https://epicblog.net/index.php");}
window.setTimeout("changeurl();",3000);
</script> -->